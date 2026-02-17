(function () {
    function applyZodiac() {
        var animal = window.piwik && piwik.zodiacAnimal;
        if (animal && document.body) {
            document.body.classList.add('zodiac-' + animal);
        }
    }

    if (document.body) {
        applyZodiac();
    } else {
        document.addEventListener('DOMContentLoaded', applyZodiac);
    }
})();
