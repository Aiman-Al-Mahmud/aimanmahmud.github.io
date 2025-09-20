# Laravel Deployment to Vercel

This guide explains how to deploy your Laravel application to Vercel with all the necessary configurations to handle serverless environment constraints.

## 🚀 Quick Start

1. **Commit all changes** to your Git repository
2. **Set environment variables** in Vercel dashboard
3. **Deploy** to Vercel

## 📁 Files Created/Modified

### New Files:
- `build.sh` - Build script that handles Composer installation and cache generation
- `build-alt.sh` - Alternative build script with multiple Composer installation methods
- `.env.example` - Environment variables template
- `DEPLOYMENT.md` - This deployment guide

### Modified Files:
- `vercel.json` - Updated with proper build command and configuration

## 🔧 Configuration Details

### vercel.json
```json
{
  "buildCommand": "./build.sh",
  "outputDirectory": "public",
  "functions": {
    "api/index.php": {
      "runtime": "vercel-php@0.7.4"
    }
  },
  "routes": [
    {
      "src": "/(.*)",
      "dest": "/api/index.php"
    }
  ],
  "env": {
    "APP_NAME": "Laravel",
    "APP_ENV": "production",
    "APP_KEY": "base64:6jbWgfpMll4kKoOXGZY/UQTEPwOCHwJOzk85bx7NdF4=",
    "APP_DEBUG": "false",
    "APP_URL": "https://your-app-name.vercel.app",
    "LOG_CHANNEL": "stderr",
    "LOG_LEVEL": "error",
    "DB_CONNECTION": "sqlite",
    "DB_DATABASE": "/tmp/database.sqlite"
  },
  "build": {
    "env": {
      "COMPOSER_ALLOW_SUPERUSER": "1"
    }
  }
}
```

### build.sh
The build script handles:
- ✅ Composer dependency installation
- ✅ Application key generation
- ✅ Cache clearing and generation
- ✅ Route caching
- ✅ View caching
- ✅ Event caching
- ✅ Autoloader optimization

## 🛠️ Environment Variables Setup

### Required Variables (set in Vercel Dashboard):
1. **APP_NAME** - Your application name
2. **APP_KEY** - Your Laravel application key (already set in vercel.json)
3. **APP_URL** - Your Vercel deployment URL (e.g., `https://your-app.vercel.app`)
4. **DB_CONNECTION** - Set to `sqlite` for serverless
5. **DB_DATABASE** - Set to `/tmp/database.sqlite` for serverless

### Optional Variables:
- **MAIL_MAILER** - Email service configuration
- **AWS_ACCESS_KEY_ID** - For S3 file storage
- **REDIS_HOST** - For Redis caching (if needed)

## 🔍 Troubleshooting Common Issues

### 1. "composer not found" Error
**Solution**: The `build.sh` script handles Composer installation automatically using the official Composer installer.

**Alternative Solution**: If the first method doesn't work, use `build-alt.sh` which includes multiple installation methods:
- Package manager installation (apt-get, yum, apk)
- Manual installation with checksum verification

To use the alternative script, update your `vercel.json`:
```json
{
  "buildCommand": "./build-alt.sh",
  // ... rest of configuration
}
```

### 2. "bootstrap/cache directory must be present and writable" Error
**Solution**: The build script generates all necessary cache files during build time, not runtime.

### 3. "php artisan config:clear handling the vercel event returned with error code 1"
**Solution**: Use `config:cache` instead of `config:clear` in production builds.

### 4. "Command 'vercel build' exited with 1"
**Solution**: Check the build logs in Vercel dashboard for specific error messages.

## 📊 Performance Optimizations

### 1. Pre-compiled Assets
- All Laravel caches are generated during build
- Composer autoloader is optimized
- No runtime cache generation

### 2. Serverless Optimizations
- Uses array cache driver (no external dependencies)
- SQLite database for serverless compatibility
- Minimal file I/O operations

### 3. Build Optimizations
- `--no-dev` flag excludes development dependencies
- `--optimize-autoloader` improves performance
- `--prefer-dist` uses distribution packages

## 🚨 Important Notes

### 1. File System Limitations
- Vercel's runtime is **read-only**
- Cannot write to `storage/` directory at runtime
- Use external services (S3, Redis) for file uploads

### 2. Database Considerations
- SQLite works well for serverless
- For production, consider PostgreSQL or MySQL
- Database resets on each deployment (use migrations)

### 3. Session Management
- Uses cookie driver (stateless)
- No server-side sessions
- Consider JWT tokens for authentication

### 4. Cache Strategy
- Array driver for serverless compatibility
- Consider Redis for better performance in production

## 🔄 Deployment Process

1. **Push to Git** - Commit all changes including `build.sh` and `vercel.json`
2. **Connect to Vercel** - Link your repository to Vercel
3. **Set Environment Variables** - Configure required env vars in Vercel dashboard
4. **Deploy** - Vercel will run the build script automatically
5. **Verify** - Check deployment logs and test your application

## 📈 Monitoring and Logs

- Use `LOG_CHANNEL=stderr` for error logging
- Check Vercel function logs in dashboard
- Monitor build logs for deployment issues

## 🔧 Advanced Configuration

### Using External Services
For production applications, consider:

1. **Database**: PostgreSQL, MySQL, or PlanetScale
2. **File Storage**: AWS S3 or Cloudinary
3. **Cache**: Redis or Memcached
4. **Email**: SendGrid, Mailgun, or AWS SES

### Custom Build Commands
If you need additional build steps, modify the `build.sh` script:

```bash
# Add your custom commands here
php artisan migrate --force
php artisan db:seed --force
```

## 🆘 Getting Help

If you encounter issues:

1. Check Vercel deployment logs
2. Verify environment variables are set correctly
3. Ensure all files are committed to Git
4. Test locally with `php artisan serve`

## 📝 Best Practices Summary

✅ **Do**:
- Generate all caches during build time
- Use environment variables for configuration
- Keep sensitive data out of version control
- Use serverless-compatible drivers
- Test deployment locally first

❌ **Don't**:
- Write to filesystem at runtime
- Use file-based cache in production
- Commit `.env` files to version control
- Run database migrations at runtime
- Use development dependencies in production

---

**Your Laravel application is now ready for Vercel deployment!** 🚀
