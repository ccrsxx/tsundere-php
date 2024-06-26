# Tsundere PHP

## Assignments

- Tugas 02

  - Contoh 1: `http://localhost:8080/introduction`
  - Contoh 2: `http://localhost:8080/calculator/addition/10/20`
  - Contoh 3: `http://localhost:8080/calculator/addition-alternative/10/20`

- Tugas 03

  - Contoh 1: `http://localhost:8080/form-class`
  - Contoh 2: `http://localhost:8080/form-class/print-form-result`

- Tugas 04

  - Contoh 1: `http://localhost:8080/home`
  - Contoh 2: `http://localhost:8080/home/about`

- Tugas 05

  - Contoh 1: `http://localhost:8080/form-class`
  - Contoh 2: `http://localhost:8080/form-class/print-form-result`

- Tugas 06

  - Contoh 1: `http://localhost:8080/test-query/book`
  - Contoh 2: `http://localhost:8080/test-query/user`
  - Contoh 3: `http://localhost:8080/test-query/role`
  - Contoh 4: `http://localhost:8080/test-query/category`

## How to install

1. Install scoop

   ```powershell
   Set-ExecutionPolicy -ExecutionPolicy RemoteSigned -Scope CurrentUser
   Invoke-RestMethod -Uri https://get.scoop.sh | Invoke-Expression
   ```

1. Install PHP and composer

   ```powershell
   scoop install php composer
   ```

1. Enable some extensions from `php.ini`. The extensions are `curl`, `intl`, `mbstring`, `mysqli`, and `openssl`. Just remove the `;` from the front of the extension

   ```powershell
   notepad ~\scoop\apps\php\current\cli\php.ini
   ```

1. Create CI 4 template with composer and CD to it

   ```powershell
   composer create-project codeigniter4/appstarter project-root
   cd project root
   ```

1. Uncomment `CI_ENVIRONMENT` on the `.env` and change it to `development`

1. Serve the CI

   ```powershell
   php spark serve
   ```
