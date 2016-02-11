<?php

class Users_video extends DataMapper {

    public $model = 'users_video';
    public $table = 'users_videos';
    public $has_one = array(
        'user' => array(
            'auto_populate' => true
        )
    );
    public $has_many = array();
    public $validation = array(
        'url' => array(
            'label' => 'URL del video',
            'rules' => array('required')
        )
    );

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------

    public function get_oembed() {
        if ($this->exists()) {
            $url = $this->url;
            $return = null;

            $url_get = 'http://vimeo.com/api/oembed.json?url=%s';

            if (is_youtube_url($url)) {
                $url_get = 'http://www.youtube.com/oembed?url=%s&format=json';
            }

            $this->oembed = json_decode(file_get_contents(sprintf($url_get, rawurlencode($url))));
        }

        $html = $this->oembed->html;
        $doc = new DOMDocument();
        @$doc->loadHTML($html);

        $embeds = $doc->getElementsByTagName('iframe');

        foreach ($embeds as $embed) {
            $this->oembed->url = $embed->getAttribute('src');
        }
        

        return $this;
    }

    // ----------------------------------------------------------------------
}
?>
