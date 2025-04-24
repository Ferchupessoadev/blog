import './bootstrap';
import 'preline';

addEventListener('DOMContentLoaded', () => {
    // remove error messages if it's present
    const $errorsBox = document.getElementById('errorsBox');
    if ($errorsBox) {
        setTimeout(() => {
            $errorsBox.remove();
        }, 3000);
    }
});
