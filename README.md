# ChatGPT PHP & MySQL Wrapper

Welcome to the ChatGPT PHP & MySQL Wrapper, a powerful and flexible ChatGPT integration for WordPress enthusiasts and developers. This project is born out of a passion for WordPress and a desire to integrate ChatGPT in a familiar environment.

## Why This Project?

With 17 years of experience in building on WordPress, the absence of a PHP MySQL installable ChatGPT wrapper that utilizes personal OpenAI API keys was something I was looking for and didn't find. This project aims to fill that gap, providing a comprehensive package easily deployed in a WordPress-like environment (LAMP stack).

## Features I aim to build (not shown in order)

- **Wizard Setup**: Easy-to-follow, step-by-step setup wizard, reminiscent of the WordPress manual installation process.
- **Single Zip Package**: Downloadable in a compact zip format for straightforward deployment.
- **Admin Account**: Create an administrator account to manage app settings.
- **User Management**: Offer paid or free access. Add, ban, or manage users with ease.
- **Self Registration & Payment Integration**: Users can self-register and opt for paid access via Stripe integration.
- **API Key Flexibility**: Users can employ their own OpenAI API keys or use a common one provided in the settings.
- **Static Fire Test**: A feature in the admin settings to ensure basic OpenAI functionality is operational.
- **Customizable Settings**: Apply filtering rules, adjust file upload permissions, code reading, and web browsing capabilities.
- **Custom GPT Instructions and Actions**: Add your own instructions and actions to tailor the GPT experience.
- **Ideal for Custom GPT Integration**: Perfect for those who want to create a clone of their custom GPT built using ChatGPT Pro, complete with payment and user management features.
- **Integration with WordPress User Management**: Leverage WordPress's user management capabilities for authentication. While not a native "AUTH API," this feature utilizes WordPress functions and possibly plugins like OAuth or JWT for secure user authentication and management in the app.
- **Social Logins**: Enable users to log in using their social media accounts for a quick and seamless authentication experience.
- **Force SSL**: Ensure all data transmission is secure by enforcing SSL connections.
- **Backup Options**: Provide users with the ability to set up daily or weekly backups, ensuring their data is regularly saved and retrievable.
- **Encrypted User Data**: Enhance security by encrypting user data stored in the database.
- **2FA with Popular Code Auth Apps**: Implement two-factor authentication using well-known apps like Google Authenticator and Authy, adding an extra layer of security.
- **Email Confirmation**: Require users to confirm their email addresses to enhance account security and validity.
- **One-Click Install on Popular Web Hosts**: Aim to make this app available as a one-click install option on popular web hosting platforms, streamlining the installation process.




## Current Status

- **Version**: 0.1 Alpha
- **Note**: The application will not be fully ready for use until it reaches Version 1.0.

## Installation and Setup

NOTE: The instructions are below, but don't do it until I reach v1.0! 

1. Download the latest release from https://github.com/mayurjobanputra/ChatGPT-wrapper-in-PHP-MySQL/releases
2. Install in a LAMP compatible web host
3. Visit {your root folder/install}. Eg: yourdomainnamehere.com/install/
 
## Contributions

I warmly invite contributions to this project! Whether you have ideas for new features, improvements, or bug fixes, your input is valuable. Feel free to add requests directly on GitHub, or reach out with your suggestions and feedback at [hello@mayur.ca](mailto:hello@mayur.ca).

## License

This project is open-source and available under the MIT License. This means anyone can use, adapt, fork, and redistribute the project as they see fit.

The MIT License is a permissive license that is short and to the point. It lets people do anything they want with your code as long as they provide attribution back to you and don’t hold you liable.

For the full license text, see [MIT License](https://opensource.org/licenses/MIT).

## Frequently Asked Questions (FAQs)

### Can I install this on an existing WordPress site?

**No.** This application should not be installed on top of an existing WordPress site. Doing so will break your WordPress installation. It must be installed in an empty root folder on a web host that supports LAMP (Linux, Apache, MySQL, PHP) stacks.

### What is the recommended way to install this application?

The recommended approach is to install this application in an empty root directory of your web host. Ensure that your hosting environment supports LAMP stacks for optimal compatibility and performance.

### Can I use my web host's one-click WordPress install feature to set this up?

While you should not install this application on a WordPress site, you can use a neat hack if your host offers a one-click WordPress installation. First, use the one-click wizard to install WordPress. This step is only to easily set up the MySQL database and obtain the database login information. Then, download or view the `wp-config.php` file from your WordPress installation to copy the database login credentials. You can then use these credentials for setting up this application. Remember to install this application in a separate, empty root folder, not in the WordPress directory.

### Is there a way to migrate my WordPress users to this application?

Currently, there isn't a direct feature to migrate WordPress users to this application. However, since both systems use MySQL, it might be possible with custom SQL queries or scripts. This would require advanced knowledge of both WordPress's and this application's database structures.

### Can I contribute to this project?

Absolutely! We welcome contributions of all forms, be it feature suggestions, code improvements, or bug fixes. Feel free to add your requests directly on GitHub or contact me at [hello@mayur.ca](mailto:hello@mayur.ca) for more direct communication.

### Where can I find more detailed documentation?

More detailed documentation will be provided as the project evolves. Keep an eye on the GitHub repository for updates.

### Is there support available if I encounter issues?

While there's no formal support structure at this stage, you can raise issues on the GitHub repository or reach out via the provided contact email. The community and project maintainers may be able to offer assistance.

### Will there be a one-click install option for this app?

This is far away. I would love to make this application available as a one-click install on popular web hosting platforms. This will simplify the installation process, allowing users to set up the application quickly and efficiently, similar to the ease of installing WordPress.  I think one-click installing is going to be essential to make this app go mainstream and follows in the footsteps of how wordpress went mainstream also.