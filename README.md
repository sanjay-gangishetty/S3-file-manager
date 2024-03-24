# AWS S3 File Upload and Management with PHP

This project provides a web interface for uploading files to an Amazon S3 bucket and managing them (listing, downloading, and deleting).

## Requirements:

1. PHP 7.4+ with AWS SDK for PHP v3 ([AWS SDK for PHP Documentation](https://docs.aws.amazon.com/aws-sdk-php/latest/)).
2. Composer ([Composer Download](https://getcomposer.org/download/)).
3. An AWS account with an S3 bucket.

## Project Structure : 
1. **config.php:** Contains configuration settings and AWS S3 client initialization.
2. **delete.php:** Handles file deletion from the S3 bucket.
3. **download.php:** Manages file downloads from the S3 bucket.
4. **file_list.php:** Displays a table of uploaded files with options to download or delete.
5. **index.php:** Main entry point of the application. Includes file upload form and file listing.
6. **upload.php:** Handles file upload to the S3 bucket.
7. **upload_form.php:** Provides the HTML form for uploading files.

## Setup:

1. Clone this repository.
2. Install dependencies using Composer:

```bash
composer install
```

3. Update `config.php` with your AWS credentials (access key ID, secret access key, and region).
4. Set the desired bucket name in `config.php`.
5. Start a web server and point it to the project directory.

## Usage: 

1. Visit the application in your web browser.
2. Use the file upload form to select and upload files to the S3 bucket.
3. Uploaded files will be listed in a table with options to download or delete.
4. Click the download button to retrieve a file from the S3 bucket.
5. Click the delete button to remove a file from the S3 bucket.

## Additional Notes

1. Ensure your AWS IAM user has sufficient permissions to perform S3 operations.
2. Customize the appearance and behavior of the web interface as needed.
   
## Contributing:

Contributions are welcome! Feel free to open an issue or submit a pull request for any improvements or features you'd like to see added.
    
