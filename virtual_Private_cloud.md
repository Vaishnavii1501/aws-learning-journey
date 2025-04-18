﻿# virtual_private_cloud
# 🌐 AWS Virtual Private Cloud (VPC)

A **Virtual Private Cloud (VPC)** is a virtual network dedicated to your AWS account. It enables you to launch AWS resources into a logically isolated section of the AWS cloud.



## 📌 Why Use a VPC?

- Full control over network configuration
- Customize IP address ranges
- Set up public and private subnets
- Control routing and security at subnet and instance levels



## 🛠️ Key Components

| Component         | Description                                                                 |
|------------------|-----------------------------------------------------------------------------|
| **Subnets**       | Divide the VPC IP range into smaller sections (Public/Private)              |
| **Route Tables**  | Manage network traffic routing within the VPC                               |
| **Internet Gateway (IGW)** | Enables communication between instances in your VPC and the internet |
| **NAT Gateway**   | Allows private subnet instances to access the internet                      |
| **Security Groups** | Virtual firewalls at the instance level                                    |
| **NACLs**         | Optional stateless firewall at the subnet level                             |


## 🚀 Hands-On Example: Creating a VPC from Console

1. Go to **VPC Dashboard** → Click **Create VPC**
2. Choose "VPC Only" or "VPC with Subnets" depending on your need
3. Assign CIDR block, e.g., `10.0.0.0/16`
4. Add subnets:
   - Public Subnet: `10.0.1.0/24`
   - Private Subnet: `10.0.2.0/24`
5. Attach an **Internet Gateway** and update the Route Table
6. Launch EC2 instances inside subnets and test connectivity

## 🧠 Notes

- Security Groups are **stateful**, NACLs are **stateless**
- You can use **VPC Peering** to connect two VPCs
- **VPC Flow Logs** help monitor network traffic

## 📚 Useful Resources

- [AWS VPC Documentation](https://docs.aws.amazon.com/vpc/latest/userguide/)
- [AWS Hands-On Labs](https://aws.amazon.com/training/)

