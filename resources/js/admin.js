import './bootstrap';
import Trix from 'trix';
import 'trix/dist/trix.css';

window.Trix = Trix;

document.addEventListener('trix-change', (e) => {
    const input = document.getElementById(e.target.getAttribute('input'));
    if (input) {
        input.value = e.target.value;
        input.dispatchEvent(new Event('input', { bubbles: true }));
        input.dispatchEvent(new Event('change', { bubbles: true }));
    }
});

document.addEventListener('trix-initialize', (e) => {
    const input = document.getElementById(e.target.getAttribute('input'));
    if (input && input.value !== e.target.value) {
        e.target.value = input.value;
    }
});

document.addEventListener('livewire:navigated', () => {
    document.querySelectorAll('trix-editor').forEach((editor) => {
        const input = document.getElementById(editor.getAttribute('input'));
        if (input && input.value !== editor.value) {
            editor.value = input.value;
        }
    });
});
