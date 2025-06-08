# ☁️ Cloud Deployment: Review Portal on Google Cloud VM

This document confirms that the **Review Portal** Laravel application has been successfully deployed on a **Google Cloud Virtual Machine (GCP VM)**.

---

##  Public Access

The application is accessible at:

**http://34.123.56.78:8000**  


---

##  Deployment Summary

### Environment
- **Platform**: Google Cloud Compute Engine
- **Instance OS**: Ubuntu 22.04 LTS
- **Web Framework**: Laravel
- **Database**: SQLite (local file)

### Setup Steps

1. **VM Creation**  
   - Machine Type: `e2-medium` (2 vCPU, 4 GB RAM)  
   - Firewall:  HTTP and  HTTPS traffic allowed

2. **Software Installed**  
   - PHP 8.1  
   - Composer  
   - SQLite  
   - Laravel dependencies via `composer install`

3. **Laravel Configuration**
   - `.env` file configured with `APP_URL=http://34.123.56.78:8000`
   - `APP_KEY` generated via `php artisan key:generate`
   - SQLite database file created: `database/database.sqlite`
   - Migrations run: `php artisan migrate`

4. **Running the Server**
   ```bash
   php artisan serve --host=0.0.0.0 --port=8000
