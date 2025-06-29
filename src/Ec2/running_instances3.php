<?php
[
    [
        'ReservationId' => 'r-0ead8b5191d6c03b4',
        'OwnerId' => '711387121306',
        'Groups' => [],
        'Instances' => [
            [
                'Architecture' => 'x86_64',
                'BlockDeviceMappings' => [
                    [
                        'DeviceName' => '/dev/xvda',
                        'Ebs' => [
                            'AttachTime' => '2025-06-29T13:52:25+00:00',
                            'DeleteOnTermination' => true,
                            'Status' => 'attached',
                            'VolumeId' => 'vol-0837b60f9997eb337'
                        ]
                    ]
                ],
                'ClientToken' => '90d9ea42-d082-4f99-91d4-e0e4520e4374',
                'EbsOptimized' => false,
                'EnaSupport' => true,
                'Hypervisor' => 'xen',
                'NetworkInterfaces' => [
                    [
                        'Association' => [
                            'IpOwnerId' => 'amazon',
                            'PublicDnsName' => 'ec2-35-173-126-47.compute-1.amazonaws.com',
                            'PublicIp' => '35.173.126.47'
                        ],
                        'Attachment' => [
                            'AttachTime' => '2025-06-29T13:52:25+00:00',
                            'AttachmentId' => 'eni-attach-06dd4fe720db16969',
                            'DeleteOnTermination' => true,
                            'DeviceIndex' => 0,
                            'Status' => 'attached',
                            'NetworkCardIndex' => 0
                        ],
                        'Description' => '',
                        'Groups' => [
                            [
                                'GroupId' => 'sg-003c5c484ec8ebb3a',
                                'GroupName' => 'launch-wizard-14'
                            ]
                        ],
                        'Ipv6Addresses' => [],
                        'MacAddress' => '12:43:e7:bb:6d:0b',
                        'NetworkInterfaceId' => 'eni-0f2f3259ecae2111b',
                        'OwnerId' => '711387121306',
                        'PrivateDnsName' => 'ip-172-31-91-178.ec2.internal',
                        'PrivateIpAddress' => '172.31.91.178',
                        'PrivateIpAddresses' => [
                            [
                                'Association' => [
                                    'IpOwnerId' => 'amazon',
                                    'PublicDnsName' => 'ec2-35-173-126-47.compute-1.amazonaws.com',
                                    'PublicIp' => '35.173.126.47'
                                ],
                                'Primary' => true,
                                'PrivateDnsName' => 'ip-172-31-91-178.ec2.internal',
                                'PrivateIpAddress' => '172.31.91.178'
                            ]
                        ],
                        'SourceDestCheck' => true,
                        'Status' => 'in-use',
                        'SubnetId' => 'subnet-059776ebe1b4842e6',
                        'VpcId' => 'vpc-0fcd0d1cd91bbbfef',
                        'InterfaceType' => 'interface',
                        'Operator' => [
                            'Managed' => false
                        ]
                    ]
                ],
                'RootDeviceName' => '/dev/xvda',
                'RootDeviceType' => 'ebs',
                'SecurityGroups' => [
                    [
                        'GroupId' => 'sg-003c5c484ec8ebb3a',
                        'GroupName' => 'launch-wizard-14'
                    ]
                ],
                'SourceDestCheck' => true,
                'Tags' => [
                    [
                        'Key' => 'Name',
                        'Value' => 'running4'
                    ]
                ],
                'VirtualizationType' => 'hvm',
                'CpuOptions' => [
                    'CoreCount' => 1,
                    'ThreadsPerCore' => 1
                ],
                'CapacityReservationSpecification' => [
                    'CapacityReservationPreference' => 'open'
                ],
                'HibernationOptions' => [
                    'Configured' => false
                ],
                'MetadataOptions' => [
                    'State' => 'applied',
                    'HttpTokens' => 'required',
                    'HttpPutResponseHopLimit' => 2,
                    'HttpEndpoint' => 'enabled',
                    'HttpProtocolIpv6' => 'disabled',
                    'InstanceMetadataTags' => 'disabled'
                ],
                'EnclaveOptions' => [
                    'Enabled' => false
                ],
                'BootMode' => 'uefi-preferred',
                'PlatformDetails' => 'Linux/UNIX',
                'UsageOperation' => 'RunInstances',
                'UsageOperationUpdateTime' => '2025-06-29T13:52:25+00:00',
                'PrivateDnsNameOptions' => [
                    'HostnameType' => 'ip-name',
                    'EnableResourceNameDnsARecord' => true,
                    'EnableResourceNameDnsAAAARecord' => false
                ],
                'MaintenanceOptions' => [
                    'AutoRecovery' => 'default',
                    'RebootMigration' => 'default'
                ],
                'CurrentInstanceBootMode' => 'legacy-bios',
                'NetworkPerformanceOptions' => [
                    'BandwidthWeighting' => 'default'
                ],
                'Operator' => [
                    'Managed' => false
                ],
                'InstanceId' => 'i-02199dfa5384d6340',
                'ImageId' => 'ami-05ffe3c48a9991133',
                'State' => [
                    'Code' => 16,
                    'Name' => 'running'
                ],
                'PrivateDnsName' => 'ip-172-31-91-178.ec2.internal',
                'PublicDnsName' => 'ec2-35-173-126-47.compute-1.amazonaws.com',
                'StateTransitionReason' => '',
                'AmiLaunchIndex' => 0,
                'ProductCodes' => [],
                'InstanceType' => 't2.micro',
                'LaunchTime' => '2025-06-29T13:52:25+00:00',
                'Placement' => [
                    'GroupName' => '',
                    'Tenancy' => 'default',
                    'AvailabilityZone' => 'us-east-1b'
                ],
                'Monitoring' => [
                    'State' => 'disabled'
                ],
                'SubnetId' => 'subnet-059776ebe1b4842e6',
                'VpcId' => 'vpc-0fcd0d1cd91bbbfef',
                'PrivateIpAddress' => '172.31.91.178',
                'PublicIpAddress' => '35.173.126.47'
            ]
        ]
    ],
    [
        'ReservationId' => 'r-05a84a259113515ed',
        'OwnerId' => '711387121306',
        'Groups' => [],
        'Instances' => [
            [
                'Architecture' => 'x86_64',
                'BlockDeviceMappings' => [
                    [
                        'DeviceName' => '/dev/xvda',
                        'Ebs' => [
                            'AttachTime' => '2025-06-29T13:47:46+00:00',
                            'DeleteOnTermination' => true,
                            'Status' => 'attached',
                            'VolumeId' => 'vol-092af1df7e8609fa9'
                        ]
                    ]
                ],
                'ClientToken' => '3fbde5b4-61ec-400b-b0d0-6e318b5d3e6b',
                'EbsOptimized' => false,
                'EnaSupport' => true,
                'Hypervisor' => 'xen',
                'NetworkInterfaces' => [
                    [
                        'Association' => [
                            'IpOwnerId' => 'amazon',
                            'PublicDnsName' => 'ec2-18-206-40-81.compute-1.amazonaws.com',
                            'PublicIp' => '18.206.40.81'
                        ],
                        'Attachment' => [
                            'AttachTime' => '2025-06-29T13:47:46+00:00',
                            'AttachmentId' => 'eni-attach-037445c47d08bd74f',
                            'DeleteOnTermination' => true,
                            'DeviceIndex' => 0,
                            'Status' => 'attached',
                            'NetworkCardIndex' => 0
                        ],
                        'Description' => '',
                        'Groups' => [
                            [
                                'GroupId' => 'sg-0d3ed048ded9a98f1',
                                'GroupName' => 'launch-wizard-13'
                            ]
                        ],
                        'Ipv6Addresses' => [],
                        'MacAddress' => '12:b6:f2:b5:f7:d3',
                        'NetworkInterfaceId' => 'eni-033a1e7ee18dd7d79',
                        'OwnerId' => '711387121306',
                        'PrivateDnsName' => 'ip-172-31-80-128.ec2.internal',
                        'PrivateIpAddress' => '172.31.80.128',
                        'PrivateIpAddresses' => [
                            [
                                'Association' => [
                                    'IpOwnerId' => 'amazon',
                                    'PublicDnsName' => 'ec2-18-206-40-81.compute-1.amazonaws.com',
                                    'PublicIp' => '18.206.40.81'
                                ],
                                'Primary' => true,
                                'PrivateDnsName' => 'ip-172-31-80-128.ec2.internal',
                                'PrivateIpAddress' => '172.31.80.128'
                            ]
                        ],
                        'SourceDestCheck' => true,
                        'Status' => 'in-use',
                        'SubnetId' => 'subnet-059776ebe1b4842e6',
                        'VpcId' => 'vpc-0fcd0d1cd91bbbfef',
                        'InterfaceType' => 'interface',
                        'Operator' => [
                            'Managed' => false
                        ]
                    ]
                ],
                'RootDeviceName' => '/dev/xvda',
                'RootDeviceType' => 'ebs',
                'SecurityGroups' => [
                    [
                        'GroupId' => 'sg-0d3ed048ded9a98f1',
                        'GroupName' => 'launch-wizard-13'
                    ]
                ],
                'SourceDestCheck' => true,
                'Tags' => [
                    [
                        'Key' => 'Name',
                        'Value' => 'running3'
                    ]
                ],
                'VirtualizationType' => 'hvm',
                'CpuOptions' => [
                    'CoreCount' => 1,
                    'ThreadsPerCore' => 1
                ],
                'CapacityReservationSpecification' => [
                    'CapacityReservationPreference' => 'open'
                ],
                'HibernationOptions' => [
                    'Configured' => false
                ],
                'MetadataOptions' => [
                    'State' => 'applied',
                    'HttpTokens' => 'required',
                    'HttpPutResponseHopLimit' => 2,
                    'HttpEndpoint' => 'enabled',
                    'HttpProtocolIpv6' => 'disabled',
                    'InstanceMetadataTags' => 'disabled'
                ],
                'EnclaveOptions' => [
                    'Enabled' => false
                ],
                'BootMode' => 'uefi-preferred',
                'PlatformDetails' => 'Linux/UNIX',
                'UsageOperation' => 'RunInstances',
                'UsageOperationUpdateTime' => '2025-06-29T13:47:46+00:00',
                'PrivateDnsNameOptions' => [
                    'HostnameType' => 'ip-name',
                    'EnableResourceNameDnsARecord' => true,
                    'EnableResourceNameDnsAAAARecord' => false
                ],
                'MaintenanceOptions' => [
                    'AutoRecovery' => 'default',
                    'RebootMigration' => 'default'
                ],
                'CurrentInstanceBootMode' => 'legacy-bios',
                'NetworkPerformanceOptions' => [
                    'BandwidthWeighting' => 'default'
                ],
                'Operator' => [
                    'Managed' => false
                ],
                'InstanceId' => 'i-01b0a9d914a1ebcb7',
                'ImageId' => 'ami-05ffe3c48a9991133',
                'State' => [
                    'Code' => 16,
                    'Name' => 'running'
                ],
                'PrivateDnsName' => 'ip-172-31-80-128.ec2.internal',
                'PublicDnsName' => 'ec2-18-206-40-81.compute-1.amazonaws.com',
                'StateTransitionReason' => '',
                'AmiLaunchIndex' => 0,
                'ProductCodes' => [],
                'InstanceType' => 't2.micro',
                'LaunchTime' => '2025-06-29T13:47:46+00:00',
                'Placement' => [
                    'GroupName' => '',
                    'Tenancy' => 'default',
                    'AvailabilityZone' => 'us-east-1b'
                ],
                'Monitoring' => [
                    'State' => 'disabled'
                ],
                'SubnetId' => 'subnet-059776ebe1b4842e6',
                'VpcId' => 'vpc-0fcd0d1cd91bbbfef',
                'PrivateIpAddress' => '172.31.80.128',
                'PublicIpAddress' => '18.206.40.81'
            ]
        ]
    ],
    [
        'ReservationId' => 'r-04c7d30fce63ba6ad',
        'OwnerId' => '711387121306',
        'Groups' => [],
        'Instances' => [
            [
                'Architecture' => 'x86_64',
                'BlockDeviceMappings' => [
                    [
                        'DeviceName' => '/dev/xvda',
                        'Ebs' => [
                            'AttachTime' => '2025-06-29T13:41:53+00:00',
                            'DeleteOnTermination' => true,
                            'Status' => 'attached',
                            'VolumeId' => 'vol-074c163d2a61c9bcd'
                        ]
                    ]
                ],
                'ClientToken' => '6a7a084c-f492-4ca6-8f9f-9773845d95c5',
                'EbsOptimized' => false,
                'EnaSupport' => true,
                'Hypervisor' => 'xen',
                'NetworkInterfaces' => [
                    [
                        'Association' => [
                            'IpOwnerId' => 'amazon',
                            'PublicDnsName' => 'ec2-3-84-92-60.compute-1.amazonaws.com',
                            'PublicIp' => '3.84.92.60'
                        ],
                        'Attachment' => [
                            'AttachTime' => '2025-06-29T13:41:52+00:00',
                            'AttachmentId' => 'eni-attach-03525b41a4b4e84ff',
                            'DeleteOnTermination' => true,
                            'DeviceIndex' => 0,
                            'Status' => 'attached',
                            'NetworkCardIndex' => 0
                        ],
                        'Description' => '',
                        'Groups' => [
                            [
                                'GroupId' => 'sg-0bcb62e8ef186331f',
                                'GroupName' => 'launch-wizard-12'
                            ]
                        ],
                        'Ipv6Addresses' => [],
                        'MacAddress' => '12:9e:53:60:51:4f',
                        'NetworkInterfaceId' => 'eni-0eb42973961b11435',
                        'OwnerId' => '711387121306',
                        'PrivateDnsName' => 'ip-172-31-95-224.ec2.internal',
                        'PrivateIpAddress' => '172.31.95.224',
                        'PrivateIpAddresses' => [
                            [
                                'Association' => [
                                    'IpOwnerId' => 'amazon',
                                    'PublicDnsName' => 'ec2-3-84-92-60.compute-1.amazonaws.com',
                                    'PublicIp' => '3.84.92.60'
                                ],
                                'Primary' => true,
                                'PrivateDnsName' => 'ip-172-31-95-224.ec2.internal',
                                'PrivateIpAddress' => '172.31.95.224'
                            ]
                        ],
                        'SourceDestCheck' => true,
                        'Status' => 'in-use',
                        'SubnetId' => 'subnet-059776ebe1b4842e6',
                        'VpcId' => 'vpc-0fcd0d1cd91bbbfef',
                        'InterfaceType' => 'interface',
                        'Operator' => [
                            'Managed' => false
                        ]
                    ]
                ],
                'RootDeviceName' => '/dev/xvda',
                'RootDeviceType' => 'ebs',
                'SecurityGroups' => [
                    [
                        'GroupId' => 'sg-0bcb62e8ef186331f',
                        'GroupName' => 'launch-wizard-12'
                    ]
                ],
                'SourceDestCheck' => true,
                'Tags' => [
                    [
                        'Key' => 'Name',
                        'Value' => 'running2'
                    ]
                ],
                'VirtualizationType' => 'hvm',
                'CpuOptions' => [
                    'CoreCount' => 1,
                    'ThreadsPerCore' => 1
                ],
                'CapacityReservationSpecification' => [
                    'CapacityReservationPreference' => 'open'
                ],
                'HibernationOptions' => [
                    'Configured' => false
                ],
                'MetadataOptions' => [
                    'State' => 'applied',
                    'HttpTokens' => 'required',
                    'HttpPutResponseHopLimit' => 2,
                    'HttpEndpoint' => 'enabled',
                    'HttpProtocolIpv6' => 'disabled',
                    'InstanceMetadataTags' => 'disabled'
                ],
                'EnclaveOptions' => [
                    'Enabled' => false
                ],
                'BootMode' => 'uefi-preferred',
                'PlatformDetails' => 'Linux/UNIX',
                'UsageOperation' => 'RunInstances',
                'UsageOperationUpdateTime' => '2025-06-29T13:41:52+00:00',
                'PrivateDnsNameOptions' => [
                    'HostnameType' => 'ip-name',
                    'EnableResourceNameDnsARecord' => true,
                    'EnableResourceNameDnsAAAARecord' => false
                ],
                'MaintenanceOptions' => [
                    'AutoRecovery' => 'default',
                    'RebootMigration' => 'default'
                ],
                'CurrentInstanceBootMode' => 'legacy-bios',
                'NetworkPerformanceOptions' => [
                    'BandwidthWeighting' => 'default'
                ],
                'Operator' => [
                    'Managed' => false
                ],
                'InstanceId' => 'i-064613f33a0ccc9b4',
                'ImageId' => 'ami-05ffe3c48a9991133',
                'State' => [
                    'Code' => 16,
                    'Name' => 'running'
                ],
                'PrivateDnsName' => 'ip-172-31-95-224.ec2.internal',
                'PublicDnsName' => 'ec2-3-84-92-60.compute-1.amazonaws.com',
                'StateTransitionReason' => '',
                'AmiLaunchIndex' => 0,
                'ProductCodes' => [],
                'InstanceType' => 't2.micro',
                'LaunchTime' => '2025-06-29T13:41:52+00:00',
                'Placement' => [
                    'GroupName' => '',
                    'Tenancy' => 'default',
                    'AvailabilityZone' => 'us-east-1b'
                ],
                'Monitoring' => [
                    'State' => 'disabled'
                ],
                'SubnetId' => 'subnet-059776ebe1b4842e6',
                'VpcId' => 'vpc-0fcd0d1cd91bbbfef',
                'PrivateIpAddress' => '172.31.95.224',
                'PublicIpAddress' => '3.84.92.60'
            ]
        ]
    ],
    [
        'ReservationId' => 'r-0605596552c22bf5d',
        'OwnerId' => '711387121306',
        'Groups' => [],
        'Instances' => [
            [
                'Architecture' => 'x86_64',
                'BlockDeviceMappings' => [
                    [
                        'DeviceName' => '/dev/xvda',
                        'Ebs' => [
                            'AttachTime' => '2025-06-29T11:09:13+00:00',
                            'DeleteOnTermination' => true,
                            'Status' => 'attached',
                            'VolumeId' => 'vol-027ba75a9c61a285d'
                        ]
                    ]
                ],
                'ClientToken' => '181ea10f-6f0e-4d3d-a5b7-1e98232211ca',
                'EbsOptimized' => false,
                'EnaSupport' => true,
                'Hypervisor' => 'xen',
                'NetworkInterfaces' => [
                    [
                        'Association' => [
                            'IpOwnerId' => 'amazon',
                            'PublicDnsName' => 'ec2-18-206-123-56.compute-1.amazonaws.com',
                            'PublicIp' => '18.206.123.56'
                        ],
                        'Attachment' => [
                            'AttachTime' => '2025-06-29T11:09:12+00:00',
                            'AttachmentId' => 'eni-attach-01b90eb132bccd20e',
                            'DeleteOnTermination' => true,
                            'DeviceIndex' => 0,
                            'Status' => 'attached',
                            'NetworkCardIndex' => 0
                        ],
                        'Description' => '',
                        'Groups' => [
                            [
                                'GroupId' => 'sg-06236db130282c8fc',
                                'GroupName' => 'launch-wizard-11'
                            ]
                        ],
                        'Ipv6Addresses' => [],
                        'MacAddress' => '12:c3:5d:bb:46:fd',
                        'NetworkInterfaceId' => 'eni-0641914bc36fe23eb',
                        'OwnerId' => '711387121306',
                        'PrivateDnsName' => 'ip-172-31-93-106.ec2.internal',
                        'PrivateIpAddress' => '172.31.93.106',
                        'PrivateIpAddresses' => [
                            [
                                'Association' => [
                                    'IpOwnerId' => 'amazon',
                                    'PublicDnsName' => 'ec2-18-206-123-56.compute-1.amazonaws.com',
                                    'PublicIp' => '18.206.123.56'
                                ],
                                'Primary' => true,
                                'PrivateDnsName' => 'ip-172-31-93-106.ec2.internal',
                                'PrivateIpAddress' => '172.31.93.106'
                            ]
                        ],
                        'SourceDestCheck' => true,
                        'Status' => 'in-use',
                        'SubnetId' => 'subnet-059776ebe1b4842e6',
                        'VpcId' => 'vpc-0fcd0d1cd91bbbfef',
                        'InterfaceType' => 'interface',
                        'Operator' => [
                            'Managed' => false
                        ]
                    ]
                ],
                'RootDeviceName' => '/dev/xvda',
                'RootDeviceType' => 'ebs',
                'SecurityGroups' => [
                    [
                        'GroupId' => 'sg-06236db130282c8fc',
                        'GroupName' => 'launch-wizard-11'
                    ]
                ],
                'SourceDestCheck' => true,
                'Tags' => [
                    [
                        'Key' => 'Name',
                        'Value' => 'running'
                    ]
                ],
                'VirtualizationType' => 'hvm',
                'CpuOptions' => [
                    'CoreCount' => 1,
                    'ThreadsPerCore' => 1
                ],
                'CapacityReservationSpecification' => [
                    'CapacityReservationPreference' => 'open'
                ],
                'HibernationOptions' => [
                    'Configured' => false
                ],
                'MetadataOptions' => [
                    'State' => 'applied',
                    'HttpTokens' => 'required',
                    'HttpPutResponseHopLimit' => 2,
                    'HttpEndpoint' => 'enabled',
                    'HttpProtocolIpv6' => 'disabled',
                    'InstanceMetadataTags' => 'disabled'
                ],
                'EnclaveOptions' => [
                    'Enabled' => false
                ],
                'BootMode' => 'uefi-preferred',
                'PlatformDetails' => 'Linux/UNIX',
                'UsageOperation' => 'RunInstances',
                'UsageOperationUpdateTime' => '2025-06-29T11:09:12+00:00',
                'PrivateDnsNameOptions' => [
                    'HostnameType' => 'ip-name',
                    'EnableResourceNameDnsARecord' => true,
                    'EnableResourceNameDnsAAAARecord' => false
                ],
                'MaintenanceOptions' => [
                    'AutoRecovery' => 'default',
                    'RebootMigration' => 'default'
                ],
                'CurrentInstanceBootMode' => 'legacy-bios',
                'NetworkPerformanceOptions' => [
                    'BandwidthWeighting' => 'default'
                ],
                'Operator' => [
                    'Managed' => false
                ],
                'InstanceId' => 'i-0effff5e896db3c06',
                'ImageId' => 'ami-05ffe3c48a9991133',
                'State' => [
                    'Code' => 16,
                    'Name' => 'running'
                ],
                'PrivateDnsName' => 'ip-172-31-93-106.ec2.internal',
                'PublicDnsName' => 'ec2-18-206-123-56.compute-1.amazonaws.com',
                'StateTransitionReason' => '',
                'AmiLaunchIndex' => 0,
                'ProductCodes' => [],
                'InstanceType' => 't2.micro',
                'LaunchTime' => '2025-06-29T11:09:12+00:00',
                'Placement' => [
                    'GroupName' => '',
                    'Tenancy' => 'default',
                    'AvailabilityZone' => 'us-east-1b'
                ],
                'Monitoring' => [
                    'State' => 'disabled'
                ],
                'SubnetId' => 'subnet-059776ebe1b4842e6',
                'VpcId' => 'vpc-0fcd0d1cd91bbbfef',
                'PrivateIpAddress' => '172.31.93.106',
                'PublicIpAddress' => '18.206.123.56'
            ]
        ]
    ]
];
?>