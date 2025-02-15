<?php
// Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.
// SPDX-License-Identifier: Apache-2.0

/*
 * ABOUT THIS PHP SAMPLE => This sample is part of the SDK for PHP Developer Guide topic at
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/emc-examples-jobs.html
 *
 *
 *
 */
// snippet-start:[mediaconvert.php.get_job.complete]
// snippet-start:[mediaconvert.php.get_job.import]

require 'vendor/autoload.php';

use Aws\MediaConvert\MediaConvertClient;  
use Aws\Exception\AwsException;
// snippet-end:[mediaconvert.php.get_job.import]

/**
 * Retrieve results from a specific completed transcoding job for AWS Elemental MediaConvert.
 *
 * This code expects that you have AWS credentials set up per:
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/guide_credentials.html
 */

//Create an AWSMediaConvert client object with your account specific endpoint. 
// snippet-start:[mediaconvert.php.get_job.main]
$mediaConvertClient = new MediaConvertClient([
    'version' => '2017-08-29',
    'region' => 'us-east-2',
    'profile' => 'default',
    'endpoint' => 'ACCOUNT_ENDPOINT'
]);

try {
    $result = $mediaConvertClient->getJob([
        'Id' => 'JOB_ID',
    ]);
} catch (AwsException $e) {
    // output error message if fails
    echo $e->getMessage();
    echo "\n";
}
 
 
// snippet-end:[mediaconvert.php.get_job.main]
// snippet-end:[mediaconvert.php.get_job.complete]

