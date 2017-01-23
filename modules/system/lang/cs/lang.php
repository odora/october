<?php

return [
    'app' => [
        'name' => 'October CMS',
        'tagline' => 'Getting back to basics'
    ],
    'directory' => [
        'create_fail' => 'Nelze vytvořit složku: :name'
    ],
    'file' => [
        'create_fail' => 'Nelze vytvořit soubor: :name'
    ],
    'combiner' => [
        'not_found' => "Slučující soubor ':name' nebyl nalezen."
    ],
    'system' => [
        'name' => 'System',
        'menu_label' => 'System',
        'categories' => [
            'cms' => 'CMS',
            'misc' => 'Ostatní',
            'logs' => 'Záznamy',
            'mail' => 'E-mail',
            'shop' => 'E-shop',
            'team' => 'Tým',
            'users' => 'Uživatelé',
            'system' => 'System',
            'social' => 'Sociální',
            'events' => 'Události',
            'customers' => 'Zákazníci',
            'my_settings' => 'Moje nastavení'
        ]
    ],
    'theme' => [
        'label' => 'Téma',
        'unnamed' => 'Téma bez názvu',
        'name' => [
            'label' => 'Název téma',
            'help' => 'Název téma podle jeho unikátního názvu, například RainLab.Vanilla'
        ],
    ],
    'themes' => [
        'install' => 'Instalace témat',
        'search' => 'vyhledejte téma k instalaci...',
        'installed' => 'Instalované téma',
        'no_themes' => 'Žádné téma instalované z tržiště.',
        'recommended' => 'Doporučené',
        'remove_confirm' => 'Opravdu chcete odstranit toto téma?'
    ],
    'plugin' => [
        'label' => 'Pluginy',
        'unnamed' => 'Plugin bez jména',
        'name' => [
            'label' => 'Název pluginu',
            'help' => 'Pojmenujte plugin unikátním kódem, například RainLab.Blog'
        ]
    ],
    'plugins' => [
        'manage' => 'Správa pluginů',
        'enable_or_disable' => 'Aktivovat, nebo deaktivovat',
        'enable_or_disable_title' => 'Zapne, nebo vyplne pluginy',
        'install' => 'Instalace pluginů',
        'install_products' => 'Instalované produkty',
        'search' => 'vyhledejte pluginy k instalaci...',
        'installed' => 'Instalované pluginy',
        'no_plugins' => 'Žádné instalované pluginy z tržiště.',
        'recommended' => 'Doporučené',
        'remove' => 'Odstranit',
        'refresh' => 'Obnovit',
        'disabled_label' => 'Neaktivní',
        'disabled_help' => 'Neaktivní pluginy jsou kompletně ignorovány systémem.',
        'frozen_label' => 'Zmrazit aktualizace',
        'frozen_help' => 'Zmrazené pluginy se neaktualizují.',
        'selected_amount' => 'Vybrané pluginy: :amount',
        'remove_confirm' => 'Opravdu chcete odstranit tento plugin?',
        'remove_success' => 'Plugin úspěšně odstraněn ze systému.',
        'refresh_confirm' => 'Jste si jistí?',
        'refresh_success' => 'Pluginy byly úspěšně obnoveny.',
        'disable_confirm' => 'Jste si jistí?',
        'disable_success' => 'Pluginy úspěšně deaktivovány.',
        'enable_success' => 'Pluginy úspěšně aktivovány.',
        'unknown_plugin' => 'Plugin odstraněn ze systému.'
    ],
    'project' => [
        'name' => 'Projekt',
        'owner_label' => 'Vlastník',
        'attach' => 'Připojit projekt',
        'detach' => 'Odpojit projekt',
        'none' => 'Žádný',
        'id' => [
            'label' => 'Projekt ID',
            'help' => 'Jak zjistím svoje Projektové ID',
            'missing' => 'Zadejte vaše Projektové ID.'
        ],
        'detach_confirm' => 'Jste si jistí, že chcete odpojit váš projekt?',
        'unbind_success' => 'Projekt byl úspěšně odpojen.'
    ],
    'settings' => [
        'menu_label' => 'Nastavení',
        'not_found' => 'Takové nastavení se nepovedlo najít.',
        'missing_model' => 'Stránka s nastavením vyžaduje definovat Model.',
        'update_success' => 'Nastavení pro :name byla úspěšně uložena.',
        'return' => 'Zpět do systémového nastavení',
        'search' => 'Hledat'
    ],
    'mail' => [
        'log_file' => 'Log file',
        'menu_label' => 'Nastavení e-mailů',
        'menu_description' => 'Konfigurace posílání e-mailových zpráv.',
        'general' => 'Obecné',
        'method' => 'Metoda posílání zpráv',
        'sender_name' => 'Jméno odesílatele',
        'sender_email' => 'E-mail odesílatele',
        'php_mail' => 'PHP mail',
        'smtp' => 'SMTP',
        'smtp_address' => 'SMTP adresa',
        'smtp_authorization' => 'Vyžadována SMTP autorizace',
        'smtp_authorization_comment' => 'Zaškrtněte pokud váš SMTP vyžaduje autorizaci.',
        'smtp_username' => 'Uživatelské jméno',
        'smtp_password' => 'Heslo',
        'smtp_port' => 'SMTP port',
        'smtp_ssl' => 'Vyžadováno SSL připojení',
        'smtp_encryption' => 'SMTP šifrovací protokol',
        'smtp_encryption_none' => 'Bez šifrování',
        'smtp_encryption_tls' => 'TLS',
        'smtp_encryption_ssl' => 'SSL',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Sendmail cesta',
        'sendmail_path_comment' => 'Zadejte prosím cestu k sendmail programu.',
        'mailgun' => 'Mailgun',
        'mailgun_domain' => 'Mailgun doména (domain)',
        'mailgun_domain_comment' => 'Zadejte doménové jméno (domain name) pro Mailgun.',
        'mailgun_secret' => 'Mailgun tajný klíč (secret)',
        'mailgun_secret_comment' => 'Zadejte váš Mailgun API klíč.',
        'mandrill' => 'Mandrill',
        'mandrill_secret' => 'Mandrill tajný klíč (secret)',
        'mandrill_secret_comment' => 'Zadejte váš Mandrill API klíč.',
        'drivers_hint_header' => 'Ovladač není nainstalovaný',
        'drivers_hint_content' => 'Tato metoda posílání e-mailů vyžaduje nainstalovaný plugin ":plugin" ještě před odesláním první zprávy.'
    ],
    'mail_templates' => [
        'menu_label' => 'E-mailové šablony',
        'menu_description' => 'Úprava e-mailových šablon, které se posílají uživatelům a administrátorům. Úprava e-mailových layoutů.',
        'new_template' => 'Nová šablona',
        'new_layout' => 'Nový layout',
        'template' => 'Šablona',
        'templates' => 'Šablony',
        'menu_layouts_label' => 'E-mailové layouty',
        'layout' => 'Layout',
        'layouts' => 'Layouty',
        'no_layout' => '-- žádný layout --',
        'name' => 'Jméno',
        'name_comment' => 'Unikátní název přes který se odkazujeme na šablonu',
        'code' => 'Kód',
        'code_comment' => 'Unikátní kód přes který se odkazujeme na šablonu',
        'subject' => 'Předmět',
        'subject_comment' => 'Předmět e-mailové zprávy',
        'description' => 'Popis',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Čistý text',
        'test_send' => 'Poslat testovací zprávu',
        'test_success' => 'Testovací zpráva byla úspěšně odeslána.',
        'return' => 'Zpět na seznam šablon',
        'test_confirm' => 'Testovací zpráva bude zaslána na :email. Chcete pokračovat?',
        'saving' => 'Ukládání šablony...',
        'sending' => 'Posílání testovací zprávy...',
    ],
    'install' => [
        'project_label' => 'Připojit k projektu',
        'plugin_label' => 'Instalace pluginu',
        'theme_label' => 'Instalace téma',
        'missing_plugin_name' => 'Zadejte prosím jméno pluginu které chcete instalovat.',
        'missing_theme_name' => 'Zadejte prosím jméno téma které chcete instalovat.',
        'install_completing' => 'Dokončování instalace',
        'install_success' => 'Plugin byl úspěšně nainstalován.'
    ],
    'updates' => [
        'title' => 'Správa aktualizací',
        'name' => 'Software update',
        'menu_label' => 'Aktualizace & pluginy',
        'menu_description' => 'Aktualizace systému, správa a instalace pluginů a témat.',
        'return_link' => 'Zpět na systémové aktualizace',
        'check_label' => 'Kontrola aktualizací',
        'retry_label' => 'Zkusit znovu',
        'plugin_name' => 'Název',
        'plugin_code' => 'Kód',
        'plugin_description' => 'Popis',
        'plugin_version' => 'Verze',
        'plugin_author' => 'Autor',
        'plugin_not_found' => 'Plugin nenalezen',
        'core_current_build' => 'Aktuální sestavení',
        'core_build' => 'Sestavení :build',
        'core_build_help' => 'Nejnovější sestavení je dostupné.',
        'core_downloading' => 'Stahování aplikačních souborů',
        'core_extracting' => 'Rozbalování aplikačních souborů',
        'plugins' => 'Pluginy',
        'themes' => 'Témata',
        'disabled' => 'Neaktivní',
        'plugin_downloading' => 'Stahování pluginu: :name',
        'plugin_extracting' => 'Rozbalování pluginu: :name',
        'plugin_version_none' => 'Nový plugin',
        'plugin_current_version' => 'Stávající verze',
        'theme_new_install' => 'Instalace nového téma.',
        'theme_downloading' => 'Stahuji téma: :name',
        'theme_extracting' => 'Rozbalování téma: :name',
        'update_label' => 'Aktualizace',
        'update_completing' => 'Dokončování aktualizace',
        'update_loading' => 'Načítám dostupné aktualizace...',
        'update_success' => 'Aktualizace systému proběhla úspěšně.',
        'update_failed_label' => 'Aktualizace selhala',
        'force_label' => 'Vynutit aktualizaci',
        'found' => [
            'label' => 'Nová aktualizace nalezeny!',
            'help' => 'Klikněte na Instalovat aktualizace pro spuštění aktualizace.'
        ],
        'none' => [
            'label' => 'Žádné aktualizace',
            'help' => 'Nebyly nalezeny žádná aktualizace.'
        ],
        'important_action' => [
            'empty' => 'Vyberte akci',
            'confirm' => 'Potvrdit aktualizaci',
            'skip' => 'Přeskočit tento plugin (pouze jednou)',
            'ignore' => 'Přeskočit tento plugin (vždy)',
        ],
        'important_action_required' => 'Je vyžadována akce',
        'important_view_guide' => 'Zobrazit aktualizační příručku',
        'important_alert_text' => 'Některé aktualizace vyžadují vaší pozornost.',
        'details_title' => 'Detaily pluginu',
        'details_view_homepage' => 'Zobrazit domovskou stránku',
        'details_readme' => 'Dokumentace',
        'details_readme_missing' => 'Není uvedená žádná dokumentace.',
        'details_upgrades' => 'Instalační příručka',
        'details_upgrades_missing' => 'Nejsou uvedené žádné aktualizační instrukce.',
        'details_current_version' => 'Stávající verze',
        'details_author' => 'Autor',
    ],
    'server' => [
        'connect_error' => 'Chyba připojení k serveru.',
        'response_not_found' => 'Aktualizační server nebyl nalezen.',
        'response_invalid' => 'Špatná odpověď ze serveru.',
        'response_empty' => 'Prázdná odpověď ze serveru.',
        'file_error' => 'Chyba stahování balíčku ze serveru.',
        'file_corrupt' => 'Soubor stažený ze serveru je chybný.'
    ],
    'behavior' => [
        'missing_property' => 'Třída :class musí definovat parametr $:property použitý v třídě chování :behavior.'
    ],
    'config' => [
        'not_found' => 'Nepovedlo se najít konfigurační soubor :file, který je definován pro :location.',
        'required' => "Konfigurace použitá v :location musí obsahovat hodnotu ':property'."
    ],
    'zip' => [
        'extract_failed' => "Nepovedlo se rozbalit soubor ':file'."
    ],
    'event_log' => [
        'hint' => 'Záznam potencionálních chyb v aplikaci, jako třeba vyjímky, nebo ladící informace.',
        'menu_label' => 'Záznam událostí',
        'menu_description' => 'Zobrazení záznamu události s časem a detaily.',
        'empty_link' => 'Smazat záznam událostí',
        'empty_loading' => 'Mazání záznamu událostí...',
        'empty_success' => 'Záznam událostí úspěšně vymazán.',
        'return_link' => 'Zpět na záznam událostí',
        'id' => 'ID',
        'id_label' => 'ID události',
        'created_at' => 'Datum & Čas',
        'message' => 'Zpráva',
        'level' => 'Úroveň'
    ],
    'request_log' => [
        'hint' => 'Tento záznam obsahuje požadavky na vaše stránky, které vyžadují pozornost, například stránky které nebylo možné najít, nebo vrací chybový kód 404.',
        'menu_label' => 'Záznam požadavků',
        'menu_description' => 'Záznam špatných požadavků, jako třeba nenalezené stránky (404).',
        'empty_link' => 'Smazat záznam požadavků',
        'empty_loading' => 'Mazání záznamu požadavků...',
        'empty_success' => 'Záznam požadavků úspěšně vymazán.',
        'return_link' => 'Zpět na záznam událostí',
        'id' => 'ID',
        'id_label' => 'Log ID',
        'count' => 'Počítadlo',
        'referer' => 'Odkaz',
        'url' => 'URL',
        'status_code' => 'Status'
    ],
    'permissions' => [
        'name' => 'Systém',
        'manage_system_settings' => 'Správa systémového nastavení',
        'manage_software_updates' => 'Správa aktualizací',
        'access_logs' => 'Zobrazit záznam přístupů',
        'manage_mail_templates' => 'Správa e-mailových šablon',
        'manage_mail_settings' => 'Správa posílání e-mailů',
        'manage_other_administrators' => 'Správa ostatních administrátorů',
        'view_the_dashboard' => 'Zobrazit plochu',
        'manage_branding' => 'Nastavení administrace'
    ]
];
