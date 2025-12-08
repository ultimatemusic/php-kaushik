File upload functionality in PHP allows users to upload files from their local system to the server using HTML forms and the $_FILES superglobal. The uploaded files are temporarily stored on the server and can be moved to a desired directory using the move_uploaded_file() function.

Security implications:
- File uploads can be exploited to upload malicious files (e.g., scripts, viruses) if not properly validated.
- Always validate the file type and size before accepting uploads.
- Restrict allowed file extensions and MIME types.
- Store uploaded files outside the web root when possible.
- Rename files before saving to prevent overwriting and avoid executing uploaded scripts.
- Set appropriate permissions on the upload directory.
- Never trust user input; always sanitize and validate all file data.