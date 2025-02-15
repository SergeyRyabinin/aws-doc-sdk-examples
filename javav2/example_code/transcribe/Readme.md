# Amazon Transcribe code examples for the SDK for Java 2.x

## Overview

Shows how to use the AWS SDK for Java 2.x to work with Amazon Transcribe.

<!--custom.overview.start-->
<!--custom.overview.end-->

_Amazon Transcribe provides transcription services for your audio files and audio streams._

## ⚠ Important

* Running this code might result in charges to your AWS account. For more details, see [AWS Pricing](https://aws.amazon.com/pricing/) and [Free Tier](https://aws.amazon.com/free/).
* Running the tests might result in charges to your AWS account.
* We recommend that you grant your code least privilege. At most, grant only the minimum permissions required to perform the task. For more information, see [Grant least privilege](https://docs.aws.amazon.com/IAM/latest/UserGuide/best-practices.html#grant-least-privilege).
* This code is not tested in every AWS Region. For more information, see [AWS Regional Services](https://aws.amazon.com/about-aws/global-infrastructure/regional-product-services).

<!--custom.important.start-->
<!--custom.important.end-->

## Code examples

### Prerequisites

For prerequisites, see the [README](../../README.md#Prerequisites) in the `javav2` folder.


<!--custom.prerequisites.start-->
<!--custom.prerequisites.end-->

### Single actions

Code excerpts that show you how to call individual service functions.

- [List transcription jobs](src/main/java/com/amazonaws/transcribe/ListTranscriptionJobs.java#L9) (`ListTranscriptionJobs`)
- [Start a transcription job](src/main/java/com/amazonaws/transcribestreaming/TranscribeStreamingDemoApp.java#L35) (`StartTranscriptionJob`)

### Scenarios

Code examples that show you how to accomplish a specific task by calling multiple
functions within the same service.

- [Transcribe audio and get job data](src/main/java/com/amazonaws/transcribestreaming/TranscribeStreamingDemoFile.java)


<!--custom.examples.start-->
<!--custom.examples.end-->

## Run the examples

### Instructions


<!--custom.instructions.start-->
<!--custom.instructions.end-->



#### Transcribe audio and get job data

This example shows you how to do the following:

- Start a transcription job with Amazon Transcribe.
- Wait for the job to complete.
- Get the URI where the transcript is stored.

<!--custom.scenario_prereqs.transcribe_Scenario_GettingStartedTranscriptionJobs.start-->
<!--custom.scenario_prereqs.transcribe_Scenario_GettingStartedTranscriptionJobs.end-->


<!--custom.scenarios.transcribe_Scenario_GettingStartedTranscriptionJobs.start-->
<!--custom.scenarios.transcribe_Scenario_GettingStartedTranscriptionJobs.end-->

### Tests

⚠ Running tests might result in charges to your AWS account.


To find instructions for running these tests, see the [README](../../README.md#Tests)
in the `javav2` folder.



<!--custom.tests.start-->
<!--custom.tests.end-->

## Additional resources

- [Amazon Transcribe Developer Guide](https://docs.aws.amazon.com/transcribe/latest/dg/what-is.html)
- [Amazon Transcribe API Reference](https://docs.aws.amazon.com/transcribe/latest/APIReference/Welcome.html)
- [SDK for Java 2.x Amazon Transcribe reference](https://sdk.amazonaws.com/java/api/latest/software/amazon/awssdk/services/transcribe/package-summary.html)

<!--custom.resources.start-->
<!--custom.resources.end-->

---

Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.

SPDX-License-Identifier: Apache-2.0