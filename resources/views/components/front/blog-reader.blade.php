<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('blogActions', (params = {}) => ({
        isSupported: 'speechSynthesis' in window,
        utterance: null, isPlaying: false, isPaused: false,
        showAudio: false, showSummary: false, showShare: false, isSummaryExpanded: true,
        voices: [], selectedVoice: '', rate: 1.0, sections: [], currentIndex: 0,
        elapsedSeconds: 0,
        postSlug: params.slug || '',
        summaryText: '',
        summaryLoading: false,
        summaryError: '',
        _timerInterval: null,
        _sectionStartTime: null,
        _accruedSeconds: 0,
        copied: false,

        get speedLabel() { return this.rate + 'x'; },
        get formattedTime() {
            const remaining = Math.max(0, this.totalEstimatedSeconds - this.elapsedSeconds);
            const s = Math.floor(remaining);
            const m = Math.floor(s / 60);
            const sec = s % 60;
            return String(m).padStart(2, '0') + ':' + String(sec).padStart(2, '0');
        },
        get totalChars() {
            return this.sections.reduce((sum, s) => sum + s.length, 0);
        },
        get totalEstimatedSeconds() {
            return this.totalChars / 15;
        },

        _startTimer() {
            this._sectionStartTime = Date.now();
            this._clearTimer();
            this._timerInterval = setInterval(() => {
                this.elapsedSeconds = this._accruedSeconds + (Date.now() - this._sectionStartTime) / 1000;
            }, 250);
        },

        _clearTimer() {
            if (this._timerInterval) {
                clearInterval(this._timerInterval);
                this._timerInterval = null;
            }
        },

        initBlog() {
            if (!this.isSupported) return;
            const loadVoices = () => {
                let available = window.speechSynthesis.getVoices();
                this.voices = available.filter(v => v.lang.startsWith('es'));
                if (this.voices.length === 0) this.voices = available;
                if (this.voices.length > 0 && !this.selectedVoice) this.selectedVoice = this.voices[0].name;
            };
            loadVoices();
            if (speechSynthesis.onvoiceschanged !== undefined) speechSynthesis.onvoiceschanged = loadVoices;

            const contentDiv = document.getElementById('blog-content');
            if (contentDiv) {
                const fullText = contentDiv.innerText;
                this.sections = fullText
                    .split(/\n{2,}/)
                    .map(s => s.trim())
                    .filter(s => s.length > 20);
            }
        },

        playSection(index) {
            if (index >= this.sections.length) { this.stop(); return; }

            if (index === 0) {
                this.elapsedSeconds = 0;
                this._accruedSeconds = 0;
            }

            this.utterance = new SpeechSynthesisUtterance(this.sections[index]);
            const voice = this.voices.find(v => v.name === this.selectedVoice);
            if (voice) this.utterance.voice = voice;
            this.utterance.rate = parseFloat(this.rate);

            this.utterance.onend = () => {
                this._accruedSeconds += (Date.now() - this._sectionStartTime) / 1000;
                this._clearTimer();
                this.currentIndex++;
                if (this.isPlaying && !this.isPaused) this.playSection(this.currentIndex);
            };
            window.speechSynthesis.cancel();
            window.speechSynthesis.speak(this.utterance);
            this.isPlaying = true; this.isPaused = false;
            this._startTimer();
        },

        togglePlay() {
            if (this.isPlaying) {
                window.speechSynthesis.pause();
                this._accruedSeconds += (Date.now() - this._sectionStartTime) / 1000;
                this._clearTimer();
                this.isPlaying = false; this.isPaused = true;
            } else {
                if (this.isPaused) {
                    window.speechSynthesis.resume();
                    this._startTimer();
                } else {
                    this.playSection(this.currentIndex);
                }
                this.isPlaying = true; this.isPaused = false;
            }
        },

        prevSection() {
            if (this.currentIndex > 0) {
                this.currentIndex--;
                if (this.isPlaying) {
                    window.speechSynthesis.cancel();
                    this._clearTimer();
                    this._accruedSeconds = 0;
                    this.playSection(this.currentIndex);
                } else {
                    this._accruedSeconds = 0;
                    this.elapsedSeconds = 0;
                }
            }
        },

        nextSection() {
            if (this.currentIndex < this.sections.length - 1) {
                this.currentIndex++;
                if (this.isPlaying) {
                    window.speechSynthesis.cancel();
                    this._clearTimer();
                    this._accruedSeconds = 0;
                    this.playSection(this.currentIndex);
                } else {
                    this._accruedSeconds = 0;
                    this.elapsedSeconds = 0;
                }
            }
        },

        cycleSpeed() {
            const speeds = [1, 1.25, 1.5, 2];
            const idx = speeds.indexOf(this.rate);
            this.rate = speeds[(idx + 1) % speeds.length];
            if (this.isPlaying) {
                window.speechSynthesis.cancel();
                this._clearTimer();
                this._accruedSeconds = 0;
                this.playSection(this.currentIndex);
            }
        },

        copyLink() {
            navigator.clipboard.writeText(window.location.href).then(() => {
                this.copied = true;
                setTimeout(() => this.copied = false, 2000);
            });
        },

        async fetchSummary(type) {
            if (!this.postSlug) return;
            this.summaryLoading = true;
            this.summaryError = '';
            this.summaryText = '';

            try {
                const res = await fetch(`/api/blog/${this.postSlug}/${type}`);
                const data = await res.json();

                if (!res.ok) {
                    throw new Error(data.error || 'Error al generar resumen');
                }

                if (type === 'highlights' && Array.isArray(data.highlights)) {
                    this.summaryText = '<ul class="list-disc pl-4 space-y-2">' +
                        data.highlights.map(h => `<li>${h}</li>`).join('') +
                        '</ul>';
                } else if (type === 'summary' && data.summary) {
                    this.summaryText = data.summary.replace(/\n\n/g, '</p><p class="mt-3">').replace(/\n/g, '<br>');
                    this.summaryText = '<p>' + this.summaryText + '</p>';
                }
            } catch (e) {
                this.summaryError = e.message;
            } finally {
                this.summaryLoading = false;
            }
        },

        stop() {
            window.speechSynthesis.cancel();
            this._clearTimer();
            this.isPlaying = false; this.isPaused = false; this.currentIndex = 0;
            this.elapsedSeconds = 0;
            this._accruedSeconds = 0;
        },
    }));
});
</script>
