# DonasiKu - Donation Application using Laravel and Midtrans

**DonasiKu** is a donation application built using the Laravel framework and utilizes Midtrans as the payment gateway (currently in sandbox mode). This application allows users to make online donations through various payment methods supported by Midtrans.

Before running this application, it is recommended to read the **Midtrans documentation** to understand the usage and integration with Midtrans. The official Midtrans documentation can be accessed at [https://docs.midtrans.com/docs](https://docs.midtrans.com/docs).

## Running Midtrans Sandbox Payment

To run the payment simulation using Midtrans sandbox, you can access the page [https://simulator.sandbox.midtrans.com/gopay/ui/index](https://simulator.sandbox.midtrans.com/gopay/ui/index). This simulation will allow you to make payments using the GoPay method in the sandbox mode.

Make sure to use the **sandbox environment** when testing and developing this application. Once you finish testing, you can switch to the Midtrans production environment when the application is ready for real usage.

## Installation

Here are the steps to install and run the DonasiKu application in your local environment:

1. Make sure **PHP** and **Composer** are installed on your computer.

2. Clone this repository to your local directory:
   ```bash
   git clone https://github.com/username/donasi-ku.git
Navigate to the project directory:

cd donasi-ku
Copy the .env.example file to .env:

cp .env.example .env
Generate a new application key by running the command:

php artisan key:generate
Set the database configuration in the .env file by filling in DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD according to your local setup.
Run the database migration and seed data:

php artisan migrate --seed
Run the local development server:

php artisan serve
Access the application in your browser via http://localhost:8000.

Contribution
If you would like to contribute to this project, please follow these steps:

Fork this repository.

Create a new branch for the feature or fix you will add:
git checkout -b new-feature
Make the necessary changes and commit your changes:

git commit -m "Add new feature"
Push the branch to your remote repository:

git push origin new-feature
Create a pull request in this repository and explain the changes you propose.

License
This project is licensed under the MIT License. For more information, see the LICENSE file.
