import './bootstrap';
import '../sass/app.scss';

import 'tinymce/tinymce';
import 'tinymce/skins/ui/oxide/skin.min.css';
import 'tinymce/skins/content/default/content.min.css';
import 'tinymce/skins/content/default/content.css';
import 'tinymce/icons/default/icons';
import 'tinymce/themes/silver/theme';
import 'tinymce/models/dom/model';

// .. After imports init TinyMCE ..
window.addEventListener('DOMContentLoaded', () => {
    tinymce.init({
        selector: 'textarea',
        entity_encoding: "raw",
        plugins : "code",
        toolbar : "code",
        file_picker_callback: function(callback, value, meta) {
            // Provide file and text for the link dialog
            if (meta.filetype === 'file') {
                callback('mypage.html', {text: 'My text'});
            }

            // Provide image and alt text for the image dialog
            if (meta.filetype === 'image') {
                callback('myimage.jpg', {alt: 'My alt text'});
            }

            // Provide alternative source and posted for the media dialog
            if (meta.filetype === 'media') {
                callback('movie.mp4', {source2: 'alt.ogg', poster: 'image.jpg'});
            }
        },
        /* TinyMCE's configuration options */
        skin: false,
        content_css: true
    });
});

const chatId = getChatId();
console.log(chatId);
Echo.channel(`chats.${chatId}`)
    .listen('.chat-message.sent', (e) => {
        let author = e.userName;
        let message = e.message;
        let timeMessage = e.sentAt;
        let newMessage = '<div class="main-message">' +
            '<div class="main-message-title">' +
            '<h1>' + author + '</h1>' + '<span>'+ timeMessage +'</span>' +
            '</div>' +
            '<p>' + message + '</p>' +
            '</div>';
        $(".chat-place-body").append(newMessage);
    });
function getChatId() {
    return document.getElementById('chat_id').value
}

$(document).ready(function () {
    $(".button-insert").click(function () {
        let message = $(".chat-input ").val();
        let timeMessage = getTime();
        if (message != "") {
            let author = "You";
            let newMessage = '<div class="main-message">' +
                '<div class="main-message-title">' +
                '<h1>' + author + '</h1>' + '<span>'+ timeMessage +'</span>' +
                '</div>' +
                '<p>' + message + '</p>' +
                '</div>';
            $(".chat-place-body").append(newMessage);
            // $(".chat-input").val("");
        }
    });
});
function getTime(){
    let dt = new Date();
    return dt.getHours() + ":" + dt.getMinutes()
}




