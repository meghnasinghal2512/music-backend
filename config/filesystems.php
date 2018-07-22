<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "s3", "rackspace"
    |
    */

    'disks' => [



      // Meghana Singhal
      // make driver to store audio under storage/uploads/seller-audio folder
            'seller-audio' => [
              'driver' => 'local',
              'root'   =>  storage_path().'/uploads/seller-audio',
            ],
      // end template driver

      // Meghana Singhal
      // make driver to store pdf under storage/uploads/seller-product-media folder
            'seller-product-media' => [
              'driver' => 'local',
              'root'   =>  storage_path().'/uploads/seller-product-media',
            ],
      // end template driver

      // Meghana Singhal
      // make driver to store video files under storage/uploads/seller-sample-video folder
            'seller-sample-video' => [
              'driver' => 'local',
              'root'   =>  storage_path().'/uploads/seller-sample-video',
            ],
      // end csvFiles driver

      // Meghana Singhal
      // make driver to store video files under storage/uploads/commercial-ads folder
            'commercial-ads' => [
              'driver' => 'local',
              'root'   =>  storage_path().'/uploads/commercial-ads',
            ],
      // end csvFiles driver

      // Meghana Singhal
      // make driver to store video files under storage/uploads/commercial-product folder
            'commercial-product' => [
              'driver' => 'local',
              'root'   =>  storage_path().'/uploads/commercial-product',
            ],
      // end csvFiles driver  social-buzz

      // Meghana Singhal
      // make driver to store video files under storage/uploads/commercial-product folder
            'social-buzz' => [
              'driver' => 'local',
              'root'   =>  storage_path().'/uploads/social-buzz',
            ],
      // end csvFiles driver


        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_KEY'),
            'secret' => env('AWS_SECRET'),
            'region' => env('AWS_REGION'),
            'bucket' => env('AWS_BUCKET'),
        ],

    ],

];
