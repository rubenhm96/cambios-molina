<?php

namespace NF_FU_VENDOR;

// This file was auto-generated from sdk-root/src/data/ec2-instance-connect/2018-04-02/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2018-04-02', 'endpointPrefix' => 'ec2-instance-connect', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceAbbreviation' => 'EC2 Instance Connect', 'serviceFullName' => 'AWS EC2 Instance Connect', 'serviceId' => 'EC2 Instance Connect', 'signatureVersion' => 'v4', 'targetPrefix' => 'AWSEC2InstanceConnectService', 'uid' => 'ec2-instance-connect-2018-04-02'], 'operations' => ['SendSSHPublicKey' => ['name' => 'SendSSHPublicKey', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'SendSSHPublicKeyRequest'], 'output' => ['shape' => 'SendSSHPublicKeyResponse'], 'errors' => [['shape' => 'AuthException'], ['shape' => 'InvalidArgsException'], ['shape' => 'ServiceException'], ['shape' => 'ThrottlingException'], ['shape' => 'EC2InstanceNotFoundException']]]], 'shapes' => ['AuthException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'String']], 'exception' => \true], 'AvailabilityZone' => ['type' => 'string', 'max' => 32, 'min' => 6, 'pattern' => '^(\\w+-){2,3}\\d+\\w+$'], 'EC2InstanceNotFoundException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'String']], 'exception' => \true], 'InstanceId' => ['type' => 'string', 'max' => 32, 'min' => 10, 'pattern' => '^i-[a-f0-9]+$'], 'InstanceOSUser' => ['type' => 'string', 'max' => 32, 'min' => 1, 'pattern' => '^[A-Za-z_][A-Za-z0-9\\@\\._-]{0,30}[A-Za-z0-9\\$_-]?$'], 'InvalidArgsException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'String']], 'exception' => \true], 'RequestId' => ['type' => 'string'], 'SSHPublicKey' => ['type' => 'string', 'max' => 4096, 'min' => 256], 'SendSSHPublicKeyRequest' => ['type' => 'structure', 'required' => ['InstanceId', 'InstanceOSUser', 'SSHPublicKey', 'AvailabilityZone'], 'members' => ['InstanceId' => ['shape' => 'InstanceId'], 'InstanceOSUser' => ['shape' => 'InstanceOSUser'], 'SSHPublicKey' => ['shape' => 'SSHPublicKey'], 'AvailabilityZone' => ['shape' => 'AvailabilityZone']]], 'SendSSHPublicKeyResponse' => ['type' => 'structure', 'members' => ['RequestId' => ['shape' => 'RequestId'], 'Success' => ['shape' => 'Success']]], 'ServiceException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'String']], 'exception' => \true, 'fault' => \true], 'String' => ['type' => 'string'], 'Success' => ['type' => 'boolean'], 'ThrottlingException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'String']], 'exception' => \true]]];
