# Image Uploads
The basics for uploading images in the admin panel.

## Tasks
- Created a route group under the admin routes that will resolve to admin/images
- Create images for the database table, this will have standard laravel id and date fields in addition to
  - description
  - alt_text
  - file_path
  - file_name
  - has_sizes (this will be a boolean field) default to 0
  - is_header
  - make suggestions for other fields needed for image uploads
- There should be a section on the admin header for images with a link to to image list area.
  - This should be a paginated list that displays the image name, description, and a thumbnail and link to an edit page
  - There should be a link to Upload Image that will link to the form for setting necessary fields and selecting the image
    - The has_sizes field is not set through the form but the rest are
    - After posting the image, it will be process through an artisan command (just run the command async for now, we may have queing later)
- Create an artisan command to process images and create appropriate sizes
  - Create a unique file_name for each image
  - Store image sizes in separate folders in the storage public directory, folders should be images/large images/medium images/small
  - Store images with original aspect ratio
  - Store images as webp format
  - Use the intervention image package to process images
- We will reuse the upload form in a modal to allow processing images on other screens (add an image while updating the homepage, to be implemented later)
