<?php

namespace miniclip\mobi;

/**
* Mobi.
* This is a very small utility class to keep track of current mobile operating system versions.
* @author Fabio Souto <fabio.souto@miniclip.com>
* @license MIT License
*/
class Mobi
{

    /**
     * Get a list of all the currently known Android codenames and versions
     * @return array
     */
    public static function androidPlatforms() {
        return [
            'Petit Four'            => '1.1',
            'Cupcake'               => '1.5',
            'Donut'                 => '1.6',
            'Eclair'                => '2.1',
            'Froyo'                 => '2.2',
            'Gingerbread'           => '2.3',
            'Honeycomb'             => '3.0',
            'Ice Cream Sandwich'    => '4.0',
            'Jelly Bean'            => '4.1',
            'KitKat'                => '4.4',
            'Lollipop'              => '5.0',
            'Marshmallow'           => '6.0',
            'Nougat'                => '7.0',
            'Oreo'                  => '8.0',
            'Pie'                   => '9.0',
            '10'                   => '10.0',
            '11'                   => '11.0',
            '12'                   => '12.0',
            '13'                   => '13.0',
            '14'                   => '14.0',
            '15'                   => '15.0'
        ];
    }

    /**
     * Get a list of all the currently known iOS codenames and versions
     * @return array
     */
    public static function iosPlatforms() {
        return [
            'iOS 2'     => '2',
            'iOS 3'     => '3',
            'iOS 4'     => '4',
            'iOS 5'     => '5',
            'iOS 6'     => '6',
            'iOS 7'     => '7',
            'iOS 8'     => '8',
            'iOS 9'     => '9',
            'iOS 10'    => '10',
            'iOS 11'    => '11',
            'iOS 12'    => '12',
            'iOS 13'    => '13',
            'iOS 14'    => '14',
            'iOS 15'    => '15',
            'iOS 16'    => '16',
            'iOS 17'    => '17'
        ];
    }
}