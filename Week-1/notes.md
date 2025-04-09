Week 1: EC2 & Linux Basics

## What I Learned

# (Elastic Compute Cloud)

- **Launched my first EC2 instance (linux)**
  - Selected t2.micro for free tier
  - Created a key pair (.pem file)
  - Chose default security group (port 22 open for SSH)
  - Verified public IP

- **SSH into EC2**
  - Used terminal to connect:
    ```bash
    ssh -i "my-key.pem" ubuntu@<public-ip>
    ```
  - Set proper permissions:
    ```bash
    chmod 400 my-key.pem
    ```

## Basic Linux Commands Practiced

| Command | Purpose |
|--------|---------|
| `ls` | List files |
| `cd` | Change directory |
| `pwd` | Show current directory |
| `mkdir` | Create directory |
| `touch` | Create file |
| `rm`, `rm -r` | Delete file/folder |
| `nano` | Open text editor |
| `sudo` | Run as superuser |
| `cat` | Show file content |
| `clear` | Clear screen |

---

##  System Setup

- **Updated the system:**
  ```bash
  sudo apt update
  sudo apt upgrade

 ** Key Concepts to Remember **

1.Always protect your .pem key file (chmod 400)

2.se sudo for administrative tasks

3.EC2 data is not persistent unless backed up (e.g., EBS volumes or snapshots)

4.Free tier EC2 = 750 hours/month (t2.micro)
