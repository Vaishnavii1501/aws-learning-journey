# AWS Week 2 – Day 1

## Apache Web Server on Ubuntu EC2

---

### EC2 Launch Steps:

1. Choose Ubuntu AMI (Amazon Machine Image)
2. Select t2.micro (free tier)
3. Configure instance settings (default is fine)
4. Add Security Group Rule:
   - Type: HTTP
   - Port: 80
   - Source: Anywhere (0.0.0.0/0)
5. Launch and download your `.pem` key file

---

### SSH into EC2 (Linux/Mac):

```bash
chmod 400 your-key.pem
ssh -i your-key.pem ubuntu@<your-ec2-public-ip>
