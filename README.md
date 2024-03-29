# Tsundere PHP

## Assignments

- Contoh 1: `http://localhost:8080/introduction`
- Contoh 2: `http://localhost:8080/calculator/addition/10/20`
- Contoh 3: `http://localhost:8080/calculator/addition-alternative/10/20`

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

1. Create CI 4 template with composer

   ```powershell
   composer create-project codeigniter4/appstarter project-root
   cd project root
   ```

1. Uncomment `CI_ENVIRONMENT` and change it to `development`

1. Serve the CI

   ```powershell
   php spark serve
   ```
