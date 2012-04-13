<?php

namespace FFMpeg\Format\Video;

use FFMpeg\Format\DefaultVideoFormat;

class X264 extends DefaultVideoFormat
{

    protected $audioCodec = 'libmp3lame';
    protected $videoCodec = 'libx264';

    protected function getAvailableAudioCodecs()
    {
        return array('libvo_aacenc', 'libfaac', 'libmp3lame');
    }

    protected function getAvailableVideoCodecs()
    {
        return array('libx264');
    }

}