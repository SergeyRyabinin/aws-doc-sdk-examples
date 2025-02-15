# Support code examples for the SDK for Java 2.x

## Overview

Shows how to use the AWS SDK for Java 2.x to work with AWS Support.

<!--custom.overview.start-->
<!--custom.overview.end-->

_Support provides support for users of Amazon Web Services._

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

### Get started

- [Hello Support](src/main/java/com/example/support/HelloSupport.java#L12) (`DescribeServices`)


### Single actions

Code excerpts that show you how to call individual service functions.

- [Add a communication to a case](src/main/java/com/example/support/SupportScenario.java#L256) (`AddCommunicationToCase`)
- [Add an attachment to a set](src/main/java/com/example/support/SupportScenario.java#L278) (`AddAttachmentsToSet`)
- [Create a case](src/main/java/com/example/support/SupportScenario.java#L334) (`CreateCase`)
- [Describe an attachment](src/main/java/com/example/support/SupportScenario.java#L209) (`DescribeAttachment`)
- [Describe cases](src/main/java/com/example/support/SupportScenario.java#L305) (`DescribeCases`)
- [Describe communications](src/main/java/com/example/support/SupportScenario.java#L226) (`DescribeCommunications`)
- [Describe services](src/main/java/com/example/support/SupportScenario.java#L385) (`DescribeServices`)
- [Describe severity levels](src/main/java/com/example/support/SupportScenario.java#L360) (`DescribeSeverityLevels`)
- [Resolve case](src/main/java/com/example/support/SupportScenario.java#L192) (`ResolveCase`)

### Scenarios

Code examples that show you how to accomplish a specific task by calling multiple
functions within the same service.

- [Get started with cases](src/main/java/com/example/support/SupportScenario.java)


<!--custom.examples.start-->
<!--custom.examples.end-->

## Run the examples

### Instructions


<!--custom.instructions.start-->
<!--custom.instructions.end-->

#### Hello Support

This example shows you how to get started using Support.



#### Get started with cases

This example shows you how to do the following:

- Get and display available services and severity levels for cases.
- Create a support case using a selected service, category, and severity level.
- Get and display a list of open cases for the current day.
- Add an attachment set and a communication to the new case.
- Describe the new attachment and communication for the case.
- Resolve the case.
- Get and display a list of resolved cases for the current day.

<!--custom.scenario_prereqs.support_Scenario_GetStartedSupportCases.start-->
<!--custom.scenario_prereqs.support_Scenario_GetStartedSupportCases.end-->


<!--custom.scenarios.support_Scenario_GetStartedSupportCases.start-->
<!--custom.scenarios.support_Scenario_GetStartedSupportCases.end-->

### Tests

⚠ Running tests might result in charges to your AWS account.


To find instructions for running these tests, see the [README](../../README.md#Tests)
in the `javav2` folder.



<!--custom.tests.start-->

#### Properties file

Before running the JUnit tests, you must define values in the **config.properties** file located in the **resources** folder. This file contains values that are required to run the JUnit tests. If you do not define all values, the JUnit tests fail.

Define this value to successfully run the JUnit tests:

- **fileAttachment** - The file can be a simple saved .txt file to use as an email attachment.

<!--custom.tests.end-->

## Additional resources

- [Support User Guide](https://docs.aws.amazon.com/awssupport/latest/user/getting-started.html)
- [Support API Reference](https://docs.aws.amazon.com/awssupport/latest/APIReference/welcome.html)
- [SDK for Java 2.x Support reference](https://sdk.amazonaws.com/java/api/latest/software/amazon/awssdk/services/support/package-summary.html)

<!--custom.resources.start-->
<!--custom.resources.end-->

---

Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.

SPDX-License-Identifier: Apache-2.0