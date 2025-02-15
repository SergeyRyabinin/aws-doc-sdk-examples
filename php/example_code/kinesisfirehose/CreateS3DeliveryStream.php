<?php
// Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.
// SPDX-License-Identifier: Apache-2.0

/*
 *  ABOUT THIS PHP SAMPLE: This sample is part of the AWS SDK for PHP Developer Guide topic at
 *  https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/kinesis-firehose-example-delivery-stream.html
 */
// snippet-start:[firehose.php.create_s3_delivery_stream.complete]
// snippet-start:[firehose.php.create_s3_delivery_stream.import]

require 'vendor/autoload.php';

use Aws\Firehose\FirehoseClient; 
use Aws\Exception\AwsException;
// snippet-end:[firehose.php.create_s3_delivery_stream.import]

/**
 * Creating an S3 Amazon Kinesis Firehose Delivery Stream.
 *
 * This code expects that you have AWS credentials set up per:
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/guide_credentials.html
 */

//Create a KinesisClient 
// snippet-start:[firehose.php.create_s3_delivery_stream.main]
$firehoseClient = new Aws\Firehose\FirehoseClient([
    'profile' => 'default',
    'version' => '2015-08-04',
    'region' => 'us-east-2'
]);

$name = "my_S3_stream_name";
$stream_type = "DirectPut";
$s3bucket = 'arn:aws:s3:::bucket_name';
$s3Role = 'arn:aws:iam::0123456789:policy/Role';

try {
    $result = $firehoseClient->createDeliveryStream([
        'DeliveryStreamName' => $name,
        'DeliveryStreamType' => $stream_type,
        'S3DestinationConfiguration' => [
            'BucketARN' => $s3bucket,
            'CloudWatchLoggingOptions' => [
                'Enabled' => false,
            ],
            'RoleARN' => $s3Role
        ],
    ]);
    var_dump($result);
} catch (AwsException $e) {
    // output error message if fails
    echo $e->getMessage();
    echo "\n";
}
 
 
// snippet-end:[firehose.php.create_s3_delivery_stream.main]
// snippet-end:[firehose.php.create_s3_delivery_stream.complete]

