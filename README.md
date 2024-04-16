# India Tourism Website

This repository contains the codebase for the India Tourism website, which is designed to provide information about various festivals, foods, places, and states of India.

## Technologies Used

- **PHP**: The backend scripting language used for server-side logic.
- **MySQL**: The relational database management system used for storing data.
- **HTML/CSS**: Used for front-end structure and styling.
- **JavaScript**: Used for client-side interactions and dynamic content.

## Database Structure

### Tables

1. **festival**: Stores information about festivals in different states.
2. **food**: Stores information about traditional foods in different states.
3. **places**: Stores information about popular tourist places in different states.
4. **register**: Stores user registration data.
5. **stateimages**: Stores images related to states.
6. **stateinformation**: Stores additional information about states.
7. **states**: Stores information about Indian states.
8. **upload**: Stores uploaded files associated with users.
9. **users**: Stores user credentials.

### Important Fields

- **festival**: Festival names and images, along with associated state ID.
- **food**: Food names and images, along with associated state ID.
- **places**: Place names and images, along with associated state ID.
- **states**: State names, descriptions, and image paths.
- **upload**: Uploaded file names and associated user IDs.

### Relationships

- **Foreign Keys**: Connect tables such as `festival`, `food`, `places`, `stateimages`, and `stateinformation` to the `states` table using the `StateId` field.

## Setup Instructions

1. Clone the repository to your local machine.
   ```bash
   git clone https://github.com/your-username/india-tourism.git
   ```
2. Set up your PHP development environment.
3. Import the database schema provided in the `database_schema.sql` file.
4. Configure the database connection in your PHP files as needed.
5. Start your local server and access the website.