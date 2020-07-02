<?php
// This file was auto-generated from sdk-root/src/data/kinesisvideo/2017-09-30/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2017-09-30', 'endpointPrefix' => 'kinesisvideo', 'protocol' => 'rest-json', 'serviceAbbreviation' => 'Kinesis Video', 'serviceFullName' => 'Amazon Kinesis Video Streams', 'serviceId' => 'Kinesis Video', 'signatureVersion' => 'v4', 'uid' => 'kinesisvideo-2017-09-30', ], 'operations' => [ 'CreateSignalingChannel' => [ 'name' => 'CreateSignalingChannel', 'http' => [ 'method' => 'POST', 'requestUri' => '/createSignalingChannel', ], 'input' => [ 'shape' => 'CreateSignalingChannelInput', ], 'output' => [ 'shape' => 'CreateSignalingChannelOutput', ], 'errors' => [ [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'ClientLimitExceededException', ], [ 'shape' => 'AccountChannelLimitExceededException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'TagsPerResourceExceededLimitException', ], ], ], 'CreateStream' => [ 'name' => 'CreateStream', 'http' => [ 'method' => 'POST', 'requestUri' => '/createStream', ], 'input' => [ 'shape' => 'CreateStreamInput', ], 'output' => [ 'shape' => 'CreateStreamOutput', ], 'errors' => [ [ 'shape' => 'AccountStreamLimitExceededException', ], [ 'shape' => 'DeviceStreamLimitExceededException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'InvalidDeviceException', ], [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'ClientLimitExceededException', ], [ 'shape' => 'TagsPerResourceExceededLimitException', ], ], ], 'DeleteSignalingChannel' => [ 'name' => 'DeleteSignalingChannel', 'http' => [ 'method' => 'POST', 'requestUri' => '/deleteSignalingChannel', ], 'input' => [ 'shape' => 'DeleteSignalingChannelInput', ], 'output' => [ 'shape' => 'DeleteSignalingChannelOutput', ], 'errors' => [ [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'ClientLimitExceededException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'VersionMismatchException', ], [ 'shape' => 'ResourceInUseException', ], ], ], 'DeleteStream' => [ 'name' => 'DeleteStream', 'http' => [ 'method' => 'POST', 'requestUri' => '/deleteStream', ], 'input' => [ 'shape' => 'DeleteStreamInput', ], 'output' => [ 'shape' => 'DeleteStreamOutput', ], 'errors' => [ [ 'shape' => 'ClientLimitExceededException', ], [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'NotAuthorizedException', ], [ 'shape' => 'VersionMismatchException', ], [ 'shape' => 'ResourceInUseException', ], ], ], 'DescribeSignalingChannel' => [ 'name' => 'DescribeSignalingChannel', 'http' => [ 'method' => 'POST', 'requestUri' => '/describeSignalingChannel', ], 'input' => [ 'shape' => 'DescribeSignalingChannelInput', ], 'output' => [ 'shape' => 'DescribeSignalingChannelOutput', ], 'errors' => [ [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'ClientLimitExceededException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'DescribeStream' => [ 'name' => 'DescribeStream', 'http' => [ 'method' => 'POST', 'requestUri' => '/describeStream', ], 'input' => [ 'shape' => 'DescribeStreamInput', ], 'output' => [ 'shape' => 'DescribeStreamOutput', ], 'errors' => [ [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ClientLimitExceededException', ], [ 'shape' => 'NotAuthorizedException', ], ], ], 'GetDataEndpoint' => [ 'name' => 'GetDataEndpoint', 'http' => [ 'method' => 'POST', 'requestUri' => '/getDataEndpoint', ], 'input' => [ 'shape' => 'GetDataEndpointInput', ], 'output' => [ 'shape' => 'GetDataEndpointOutput', ], 'errors' => [ [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ClientLimitExceededException', ], [ 'shape' => 'NotAuthorizedException', ], ], ], 'GetSignalingChannelEndpoint' => [ 'name' => 'GetSignalingChannelEndpoint', 'http' => [ 'method' => 'POST', 'requestUri' => '/getSignalingChannelEndpoint', ], 'input' => [ 'shape' => 'GetSignalingChannelEndpointInput', ], 'output' => [ 'shape' => 'GetSignalingChannelEndpointOutput', ], 'errors' => [ [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'ClientLimitExceededException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListSignalingChannels' => [ 'name' => 'ListSignalingChannels', 'http' => [ 'method' => 'POST', 'requestUri' => '/listSignalingChannels', ], 'input' => [ 'shape' => 'ListSignalingChannelsInput', ], 'output' => [ 'shape' => 'ListSignalingChannelsOutput', ], 'errors' => [ [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'ClientLimitExceededException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListStreams' => [ 'name' => 'ListStreams', 'http' => [ 'method' => 'POST', 'requestUri' => '/listStreams', ], 'input' => [ 'shape' => 'ListStreamsInput', ], 'output' => [ 'shape' => 'ListStreamsOutput', ], 'errors' => [ [ 'shape' => 'ClientLimitExceededException', ], [ 'shape' => 'InvalidArgumentException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/ListTagsForResource', ], 'input' => [ 'shape' => 'ListTagsForResourceInput', ], 'output' => [ 'shape' => 'ListTagsForResourceOutput', ], 'errors' => [ [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'ClientLimitExceededException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListTagsForStream' => [ 'name' => 'ListTagsForStream', 'http' => [ 'method' => 'POST', 'requestUri' => '/listTagsForStream', ], 'input' => [ 'shape' => 'ListTagsForStreamInput', ], 'output' => [ 'shape' => 'ListTagsForStreamOutput', ], 'errors' => [ [ 'shape' => 'ClientLimitExceededException', ], [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'NotAuthorizedException', ], [ 'shape' => 'InvalidResourceFormatException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/TagResource', ], 'input' => [ 'shape' => 'TagResourceInput', ], 'output' => [ 'shape' => 'TagResourceOutput', ], 'errors' => [ [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'ClientLimitExceededException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'TagsPerResourceExceededLimitException', ], ], ], 'TagStream' => [ 'name' => 'TagStream', 'http' => [ 'method' => 'POST', 'requestUri' => '/tagStream', ], 'input' => [ 'shape' => 'TagStreamInput', ], 'output' => [ 'shape' => 'TagStreamOutput', ], 'errors' => [ [ 'shape' => 'ClientLimitExceededException', ], [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'NotAuthorizedException', ], [ 'shape' => 'InvalidResourceFormatException', ], [ 'shape' => 'TagsPerResourceExceededLimitException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/UntagResource', ], 'input' => [ 'shape' => 'UntagResourceInput', ], 'output' => [ 'shape' => 'UntagResourceOutput', ], 'errors' => [ [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'ClientLimitExceededException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'UntagStream' => [ 'name' => 'UntagStream', 'http' => [ 'method' => 'POST', 'requestUri' => '/untagStream', ], 'input' => [ 'shape' => 'UntagStreamInput', ], 'output' => [ 'shape' => 'UntagStreamOutput', ], 'errors' => [ [ 'shape' => 'ClientLimitExceededException', ], [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'NotAuthorizedException', ], [ 'shape' => 'InvalidResourceFormatException', ], ], ], 'UpdateDataRetention' => [ 'name' => 'UpdateDataRetention', 'http' => [ 'method' => 'POST', 'requestUri' => '/updateDataRetention', ], 'input' => [ 'shape' => 'UpdateDataRetentionInput', ], 'output' => [ 'shape' => 'UpdateDataRetentionOutput', ], 'errors' => [ [ 'shape' => 'ClientLimitExceededException', ], [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'NotAuthorizedException', ], [ 'shape' => 'VersionMismatchException', ], ], ], 'UpdateSignalingChannel' => [ 'name' => 'UpdateSignalingChannel', 'http' => [ 'method' => 'POST', 'requestUri' => '/updateSignalingChannel', ], 'input' => [ 'shape' => 'UpdateSignalingChannelInput', ], 'output' => [ 'shape' => 'UpdateSignalingChannelOutput', ], 'errors' => [ [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'ClientLimitExceededException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'VersionMismatchException', ], ], ], 'UpdateStream' => [ 'name' => 'UpdateStream', 'http' => [ 'method' => 'POST', 'requestUri' => '/updateStream', ], 'input' => [ 'shape' => 'UpdateStreamInput', ], 'output' => [ 'shape' => 'UpdateStreamOutput', ], 'errors' => [ [ 'shape' => 'ClientLimitExceededException', ], [ 'shape' => 'InvalidArgumentException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'NotAuthorizedException', ], [ 'shape' => 'VersionMismatchException', ], ], ], ], 'shapes' => [ 'APIName' => [ 'type' => 'string', 'enum' => [ 'PUT_MEDIA', 'GET_MEDIA', 'LIST_FRAGMENTS', 'GET_MEDIA_FOR_FRAGMENT_LIST', 'GET_HLS_STREAMING_SESSION_URL', 'GET_DASH_STREAMING_SESSION_URL', 'GET_CLIP', ], ], 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 401, ], 'exception' => true, ], 'AccountChannelLimitExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'AccountStreamLimitExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'ChannelInfo' => [ 'type' => 'structure', 'members' => [ 'ChannelName' => [ 'shape' => 'ChannelName', ], 'ChannelARN' => [ 'shape' => 'ResourceARN', ], 'ChannelType' => [ 'shape' => 'ChannelType', ], 'ChannelStatus' => [ 'shape' => 'Status', ], 'CreationTime' => [ 'shape' => 'Timestamp', ], 'SingleMasterConfiguration' => [ 'shape' => 'SingleMasterConfiguration', ], 'Version' => [ 'shape' => 'Version', ], ], ], 'ChannelInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ChannelInfo', ], ], 'ChannelName' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '[a-zA-Z0-9_.-]+', ], 'ChannelNameCondition' => [ 'type' => 'structure', 'members' => [ 'ComparisonOperator' => [ 'shape' => 'ComparisonOperator', ], 'ComparisonValue' => [ 'shape' => 'ChannelName', ], ], ], 'ChannelProtocol' => [ 'type' => 'string', 'enum' => [ 'WSS', 'HTTPS', ], ], 'ChannelRole' => [ 'type' => 'string', 'enum' => [ 'MASTER', 'VIEWER', ], ], 'ChannelType' => [ 'type' => 'string', 'enum' => [ 'SINGLE_MASTER', ], ], 'ClientLimitExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'ComparisonOperator' => [ 'type' => 'string', 'enum' => [ 'BEGINS_WITH', ], ], 'CreateSignalingChannelInput' => [ 'type' => 'structure', 'required' => [ 'ChannelName', ], 'members' => [ 'ChannelName' => [ 'shape' => 'ChannelName', ], 'ChannelType' => [ 'shape' => 'ChannelType', ], 'SingleMasterConfiguration' => [ 'shape' => 'SingleMasterConfiguration', ], 'Tags' => [ 'shape' => 'TagOnCreateList', ], ], ], 'CreateSignalingChannelOutput' => [ 'type' => 'structure', 'members' => [ 'ChannelARN' => [ 'shape' => 'ResourceARN', ], ], ], 'CreateStreamInput' => [ 'type' => 'structure', 'required' => [ 'StreamName', ], 'members' => [ 'DeviceName' => [ 'shape' => 'DeviceName', ], 'StreamName' => [ 'shape' => 'StreamName', ], 'MediaType' => [ 'shape' => 'MediaType', ], 'KmsKeyId' => [ 'shape' => 'KmsKeyId', ], 'DataRetentionInHours' => [ 'shape' => 'DataRetentionInHours', ], 'Tags' => [ 'shape' => 'ResourceTags', ], ], ], 'CreateStreamOutput' => [ 'type' => 'structure', 'members' => [ 'StreamARN' => [ 'shape' => 'ResourceARN', ], ], ], 'DataEndpoint' => [ 'type' => 'string', ], 'DataRetentionChangeInHours' => [ 'type' => 'integer', 'min' => 1, ], 'DataRetentionInHours' => [ 'type' => 'integer', 'min' => 0, ], 'DeleteSignalingChannelInput' => [ 'type' => 'structure', 'required' => [ 'ChannelARN', ], 'members' => [ 'ChannelARN' => [ 'shape' => 'ResourceARN', ], 'CurrentVersion' => [ 'shape' => 'Version', ], ], ], 'DeleteSignalingChannelOutput' => [ 'type' => 'structure', 'members' => [], ], 'DeleteStreamInput' => [ 'type' => 'structure', 'required' => [ 'StreamARN', ], 'members' => [ 'StreamARN' => [ 'shape' => 'ResourceARN', ], 'CurrentVersion' => [ 'shape' => 'Version', ], ], ], 'DeleteStreamOutput' => [ 'type' => 'structure', 'members' => [], ], 'DescribeSignalingChannelInput' => [ 'type' => 'structure', 'members' => [ 'ChannelName' => [ 'shape' => 'ChannelName', ], 'ChannelARN' => [ 'shape' => 'ResourceARN', ], ], ], 'DescribeSignalingChannelOutput' => [ 'type' => 'structure', 'members' => [ 'ChannelInfo' => [ 'shape' => 'ChannelInfo', ], ], ], 'DescribeStreamInput' => [ 'type' => 'structure', 'members' => [ 'StreamName' => [ 'shape' => 'StreamName', ], 'StreamARN' => [ 'shape' => 'ResourceARN', ], ], ], 'DescribeStreamOutput' => [ 'type' => 'structure', 'members' => [ 'StreamInfo' => [ 'shape' => 'StreamInfo', ], ], ], 'DeviceName' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '[a-zA-Z0-9_.-]+', ], 'DeviceStreamLimitExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'ErrorMessage' => [ 'type' => 'string', ], 'GetDataEndpointInput' => [ 'type' => 'structure', 'required' => [ 'APIName', ], 'members' => [ 'StreamName' => [ 'shape' => 'StreamName', ], 'StreamARN' => [ 'shape' => 'ResourceARN', ], 'APIName' => [ 'shape' => 'APIName', ], ], ], 'GetDataEndpointOutput' => [ 'type' => 'structure', 'members' => [ 'DataEndpoint' => [ 'shape' => 'DataEndpoint', ], ], ], 'GetSignalingChannelEndpointInput' => [ 'type' => 'structure', 'required' => [ 'ChannelARN', ], 'members' => [ 'ChannelARN' => [ 'shape' => 'ResourceARN', ], 'SingleMasterChannelEndpointConfiguration' => [ 'shape' => 'SingleMasterChannelEndpointConfiguration', ], ], ], 'GetSignalingChannelEndpointOutput' => [ 'type' => 'structure', 'members' => [ 'ResourceEndpointList' => [ 'shape' => 'ResourceEndpointList', ], ], ], 'InvalidArgumentException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'InvalidDeviceException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'InvalidResourceFormatException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'KmsKeyId' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '.+', ], 'ListOfProtocols' => [ 'type' => 'list', 'member' => [ 'shape' => 'ChannelProtocol', ], 'max' => 5, 'min' => 1, ], 'ListSignalingChannelsInput' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'ListStreamsInputLimit', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'ChannelNameCondition' => [ 'shape' => 'ChannelNameCondition', ], ], ], 'ListSignalingChannelsOutput' => [ 'type' => 'structure', 'members' => [ 'ChannelInfoList' => [ 'shape' => 'ChannelInfoList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListStreamsInput' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'ListStreamsInputLimit', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'StreamNameCondition' => [ 'shape' => 'StreamNameCondition', ], ], ], 'ListStreamsInputLimit' => [ 'type' => 'integer', 'max' => 10000, 'min' => 1, ], 'ListStreamsOutput' => [ 'type' => 'structure', 'members' => [ 'StreamInfoList' => [ 'shape' => 'StreamInfoList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListTagsForResourceInput' => [ 'type' => 'structure', 'required' => [ 'ResourceARN', ], 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'ResourceARN' => [ 'shape' => 'ResourceARN', ], ], ], 'ListTagsForResourceOutput' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'Tags' => [ 'shape' => 'ResourceTags', ], ], ], 'ListTagsForStreamInput' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'StreamARN' => [ 'shape' => 'ResourceARN', ], 'StreamName' => [ 'shape' => 'StreamName', ], ], ], 'ListTagsForStreamOutput' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'Tags' => [ 'shape' => 'ResourceTags', ], ], ], 'MediaType' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '[\\w\\-\\.\\+]+/[\\w\\-\\.\\+]+(,[\\w\\-\\.\\+]+/[\\w\\-\\.\\+]+)*', ], 'MessageTtlSeconds' => [ 'type' => 'integer', 'max' => 120, 'min' => 5, ], 'NextToken' => [ 'type' => 'string', 'max' => 512, 'min' => 0, 'pattern' => '[a-zA-Z0-9+/=]*', ], 'NotAuthorizedException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 401, ], 'exception' => true, ], 'ResourceARN' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, 'pattern' => 'arn:aws:kinesisvideo:[a-z0-9-]+:[0-9]+:[a-z]+/[a-zA-Z0-9_.-]+/[0-9]+', ], 'ResourceEndpoint' => [ 'type' => 'string', ], 'ResourceEndpointList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceEndpointListItem', ], ], 'ResourceEndpointListItem' => [ 'type' => 'structure', 'members' => [ 'Protocol' => [ 'shape' => 'ChannelProtocol', ], 'ResourceEndpoint' => [ 'shape' => 'ResourceEndpoint', ], ], ], 'ResourceInUseException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'ResourceTags' => [ 'type' => 'map', 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], 'max' => 50, 'min' => 1, ], 'SingleMasterChannelEndpointConfiguration' => [ 'type' => 'structure', 'members' => [ 'Protocols' => [ 'shape' => 'ListOfProtocols', ], 'Role' => [ 'shape' => 'ChannelRole', ], ], ], 'SingleMasterConfiguration' => [ 'type' => 'structure', 'members' => [ 'MessageTtlSeconds' => [ 'shape' => 'MessageTtlSeconds', ], ], ], 'Status' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'ACTIVE', 'UPDATING', 'DELETING', ], ], 'StreamInfo' => [ 'type' => 'structure', 'members' => [ 'DeviceName' => [ 'shape' => 'DeviceName', ], 'StreamName' => [ 'shape' => 'StreamName', ], 'StreamARN' => [ 'shape' => 'ResourceARN', ], 'MediaType' => [ 'shape' => 'MediaType', ], 'KmsKeyId' => [ 'shape' => 'KmsKeyId', ], 'Version' => [ 'shape' => 'Version', ], 'Status' => [ 'shape' => 'Status', ], 'CreationTime' => [ 'shape' => 'Timestamp', ], 'DataRetentionInHours' => [ 'shape' => 'DataRetentionInHours', ], ], ], 'StreamInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'StreamInfo', ], ], 'StreamName' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '[a-zA-Z0-9_.-]+', ], 'StreamNameCondition' => [ 'type' => 'structure', 'members' => [ 'ComparisonOperator' => [ 'shape' => 'ComparisonOperator', ], 'ComparisonValue' => [ 'shape' => 'StreamName', ], ], ], 'Tag' => [ 'type' => 'structure', 'required' => [ 'Key', 'Value', ], 'members' => [ 'Key' => [ 'shape' => 'TagKey', ], 'Value' => [ 'shape' => 'TagValue', ], ], ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*)$', ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 50, 'min' => 1, ], 'TagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], 'max' => 50, 'min' => 1, ], 'TagOnCreateList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], 'max' => 50, 'min' => 0, ], 'TagResourceInput' => [ 'type' => 'structure', 'required' => [ 'ResourceARN', 'Tags', ], 'members' => [ 'ResourceARN' => [ 'shape' => 'ResourceARN', ], 'Tags' => [ 'shape' => 'TagList', ], ], ], 'TagResourceOutput' => [ 'type' => 'structure', 'members' => [], ], 'TagStreamInput' => [ 'type' => 'structure', 'required' => [ 'Tags', ], 'members' => [ 'StreamARN' => [ 'shape' => 'ResourceARN', ], 'StreamName' => [ 'shape' => 'StreamName', ], 'Tags' => [ 'shape' => 'ResourceTags', ], ], ], 'TagStreamOutput' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, 'pattern' => '[\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*', ], 'TagsPerResourceExceededLimitException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'Timestamp' => [ 'type' => 'timestamp', ], 'UntagResourceInput' => [ 'type' => 'structure', 'required' => [ 'ResourceARN', 'TagKeyList', ], 'members' => [ 'ResourceARN' => [ 'shape' => 'ResourceARN', ], 'TagKeyList' => [ 'shape' => 'TagKeyList', ], ], ], 'UntagResourceOutput' => [ 'type' => 'structure', 'members' => [], ], 'UntagStreamInput' => [ 'type' => 'structure', 'required' => [ 'TagKeyList', ], 'members' => [ 'StreamARN' => [ 'shape' => 'ResourceARN', ], 'StreamName' => [ 'shape' => 'StreamName', ], 'TagKeyList' => [ 'shape' => 'TagKeyList', ], ], ], 'UntagStreamOutput' => [ 'type' => 'structure', 'members' => [], ], 'UpdateDataRetentionInput' => [ 'type' => 'structure', 'required' => [ 'CurrentVersion', 'Operation', 'DataRetentionChangeInHours', ], 'members' => [ 'StreamName' => [ 'shape' => 'StreamName', ], 'StreamARN' => [ 'shape' => 'ResourceARN', ], 'CurrentVersion' => [ 'shape' => 'Version', ], 'Operation' => [ 'shape' => 'UpdateDataRetentionOperation', ], 'DataRetentionChangeInHours' => [ 'shape' => 'DataRetentionChangeInHours', ], ], ], 'UpdateDataRetentionOperation' => [ 'type' => 'string', 'enum' => [ 'INCREASE_DATA_RETENTION', 'DECREASE_DATA_RETENTION', ], ], 'UpdateDataRetentionOutput' => [ 'type' => 'structure', 'members' => [], ], 'UpdateSignalingChannelInput' => [ 'type' => 'structure', 'required' => [ 'ChannelARN', 'CurrentVersion', ], 'members' => [ 'ChannelARN' => [ 'shape' => 'ResourceARN', ], 'CurrentVersion' => [ 'shape' => 'Version', ], 'SingleMasterConfiguration' => [ 'shape' => 'SingleMasterConfiguration', ], ], ], 'UpdateSignalingChannelOutput' => [ 'type' => 'structure', 'members' => [], ], 'UpdateStreamInput' => [ 'type' => 'structure', 'required' => [ 'CurrentVersion', ], 'members' => [ 'StreamName' => [ 'shape' => 'StreamName', ], 'StreamARN' => [ 'shape' => 'ResourceARN', ], 'CurrentVersion' => [ 'shape' => 'Version', ], 'DeviceName' => [ 'shape' => 'DeviceName', ], 'MediaType' => [ 'shape' => 'MediaType', ], ], ], 'UpdateStreamOutput' => [ 'type' => 'structure', 'members' => [], ], 'Version' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[a-zA-Z0-9]+', ], 'VersionMismatchException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], ],];
