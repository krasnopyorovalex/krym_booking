import * as utils from "../../../js/vendor/utils";

document.addEventListener("DOMContentLoaded", () => {

    const flashMessages = document.getElementsByClassName('flash-message');
    if (flashMessages) {
        const flashMessagesLength = flashMessages.length;

        if (flashMessagesLength) {
            for (let i = 0; i < flashMessagesLength; i++) {
                setTimeout(() => utils.fadeOutAndRemove(flashMessages[i]), 2500);
            }
        }
    }
});
