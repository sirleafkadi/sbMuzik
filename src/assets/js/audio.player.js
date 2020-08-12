"use strict";

//=> Class Definition
var AudioPlayer = AudioPlayer || {};

$(function () {
    AudioPlayer = {
        //=> Initialize function to call all functions of the class
        init: function () {
            if ($('#audioPlayer').length === 0) {
                return false;
            }
            AudioPlayer.initAudioPlayer();
            AudioPlayer.volumeDropdownClick();
            AudioPlayer.volumeIconClick();
            AudioPlayer.addAudioInPlayer();
        },

        //=> Initialize audio player
        initAudioPlayer: function () {
            Amplitude.init({
                "songs": [
                    {
                        "name": "",
                        "Producer": "",
                        "Category": "",
                        "url": "",
                        "cover_img": ""
                    }
                ],
                "playlists": {
                    "special": {
                        songs: [
                           
                        ]
                    }
                }
            });
        },

        //=> Volume dropdown click
        volumeDropdownClick: function () {
            $(document).on('click', '.volume-dropdown-menu', function (e) {
                e.stopPropagation();
            });
        },

        //=> Change volume icon in audio player from it's range
        volumeIconClick: function () {
            var $audioInput = $('.audio-volume input[type="range"]');
            var $audioButton = $('.audio-volume .btn');

            $audioInput.on('change', function () {
                var $this = $(this);
                var value = parseInt($this.val(), 10);

                if (value === 0) {
                    $audioButton.html('<i class="ion-md-volume-mute"></i>');
                } else if (value > 0 && value < 70) {
                    $audioButton.html('<i class="ion-md-volume-low"></i>');
                } else if (value > 70) {
                    $audioButton.html('<i class="ion-md-volume-high"></i>');
                }
            })
        },

        //=> Add audio in player on click of card
        addAudioInPlayer: function () {
            $(document).on('click', 'a[data-audio]', function () {
                var audioData = $(this).data('audio');
                Amplitude.removeSong(0);
                Amplitude.playNow(audioData);
            })
        }
    };

    //=> Call class at document ready
    $(document).ready(AudioPlayer.init);
});