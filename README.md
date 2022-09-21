## Demo with repeater issue in Filament 
### How to install:
1. Clone repository
2. Copy env file: ``cp .env.example .env``
3. Run ``docker-compose up -d``
4. Install composer dependencies with: ``./vendor/bin/sail composer install``
5. Setup environment. Run migrations and seed data:
```bash
    ./vendor/bin/sail artisan key:generate 
    ./vendor/bin/sail artisan migrate 
    ./vendor/bin/sail artisan db:seed
```
### How to reproduce issue:
1. Log in to dashboard:

    Login: ``test@example.com``
    
    Password: ``password``
2. Go to the categories edit page.
3. In posts relation manager, choose post and click "Edit" button, this will open modal window. 
After that close modal and click "Edit" button on different post (important post should be not the same)
4. In modal that opened for the second time repeater are expanded and cannot be collapsed.