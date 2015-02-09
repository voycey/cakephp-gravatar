<?php
    App::uses('AppHelper', 'View/Helper');
    class GravatarHelper extends AppHelper {

        /**
         * This function takes in a photo stored on the local machine and an email,
         * checks to see if the photo exists, if not it fetches a Gravatar for the provided
         * email address (or a placeholder if the email doesn't exist)
         * @param $photo
         * @param $email
         */
        public function displayProfilePicture($photo, $email="none@none.com") {

            if($photo == "" || !is_file($photo)) {
                $userImage = $this->get_gravatar($email);
                echo "<img src=".$userImage ." />" . "<br />";

            } else {

                echo "<img src=". $photo ."/>" . "<br />";
            }
        }
        /**
         * Gets a Gravatar Image for a specific email
         * @param string $email The email address
         * @param integer $s Size in pixels, defaults to 80px [ 1 - 2048 ]
         * @param string $d Default imageset to use [ 404 | mm | identicon | monsterid | wavatar ]
         * @param string $r Maximum rating (inclusive) [ g | pg | r | x ]
         * @param boolean $img True to return a complete IMG tag False for just the URL
         * @param array $atts Optional, additional key/value attributes to include in the IMG tag
         * @return String containing either just a URL or a complete image tag
         */
        public function get_gravatar( $email="none@none.com", $s = 80, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {
            $url = 'https://www.gravatar.com/avatar/';
            $url .= md5( strtolower( trim( $email ) ) );
            $url .= "?s=$s&d=$d&r=$r";
            if ( $img ) {
                $url = '<img src="' . $url . '"';
                foreach ( $atts as $key => $val )
                    $url .= ' ' . $key . '="' . $val . '"';
                $url .= ' />';
            }
            return $url;
        }


    }
