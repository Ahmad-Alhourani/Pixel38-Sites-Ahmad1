<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Языковые ресурсы названий строк (Strings)
    |--------------------------------------------------------------------------
    |
    | Следующие языковые ресурсы используются в названиях
    | строк (Strings) всего вашего приложения.
    | Вы можете свободно изменять эти языковые ресурсы в соответствии
    | с требованиями вашего приложения.
    |
    */

    'backend'  => [

        'access'    => [

            'users' => [

                'delete_user_confirm'  => 'Вы уверены, что хотите удалить этого пользователя навсегда? Если в приложении, имеются ссылки на этого пользователя, возможно это приведет к ошибкам. Действуйте на своё усмотрение!',
                'if_confirmed_off'     => '(Если чекбоокс \'Подтверждён\' неактивен)',
                'no_deactivated'       => 'Нет деактивированных пользователей.',
                'no_deleted'           => 'Нет удаленных пользователей.',
                'restore_user_confirm' => 'Восстановить этого пользователя?',
            ],
        ],

        'dashboard' => [
            'title'   => 'Системная панель',
            'welcome' => 'Добро пожаловать',
        ],

        'general'   => [
            'all_rights_reserved' => 'Все права защищены.',
            'are_you_sure'        => 'Вы уверены?',
            'xlabtechs_link'    => 'X-Lab Technologies',
            'continue'            => 'Продолжить',
            'member_since'        => 'Пользователь с',
            'minutes'             => 'минут',
            'search_placeholder'  => 'Поиск...',
            'timeout'             => 'Вы автоматически выведены из системы из соображений безопасности, так как Вы не были активны в течении',
            'see_all'             => [
                'messages'      => 'Просмотр всех сообщений',
                'notifications' => 'Показать все',
                'tasks'         => 'Показать все задачи',
            ],
            'status'              => [
                'offline' => 'Офлайн',
                'online'  => 'Онлайн',
            ],
            'you_have'            => [
                'messages'      => '{0} У Вас нет сообщений|{1} У Вас 1 сообщение|[2,Inf] У Вас :number сообщений',
                'notifications' => '{0} У Вас нет уведомлений|{1} У Вас есть 1 уведомление|[2,Inf] У Вас :number уведомлений',
                'tasks'         => '{0} У Вас нет заданий|{1} У Вас 1 задание|[2,Inf] У Вас :number заданий',
            ],
        ],

        'search'    => [
            'empty'      => 'Введите слово для поиска.',
            'incomplete' => 'Вы должны подключить или создать свою систему поиска для этого приложения.',
            'results'    => 'Результаты поиска :query',
            'title'      => 'Результаты поиска',
        ],

        'welcome'   => '
<p>В этом проекте использована тема оформления <strong>CoreUI</strong> с минимальным набором стилей и сценариев, необходимых для его работы.</p>
<p>Используйте полную версию <strong>CoreUI</strong> шаблона по адресу <a href="https://coreui.io/" target="_blank">creativeLabs</a> и добавляйте в это приложение необходимые вам компоненты.</p>
<p>Проект включает в себя <strong>полнофункциональную библиотеку управления пользователями с разграничением их на основе ролей и разрешений.</strong></p>
<p>Имейте в виду, что этот проект находится в постоянном производстве и поэтому в нем возможны ошибки. Я делаю все возможное, чтобы их исправлять по мере обнаружения.</p>
<p>Заходите на <a href="https://github.com/rappasoft/laravel-5-boilerplate" target="_blank">GitHub</a> страницу для получения дополнительной информации, там же вы можете отавлять свои сообщения.</p>
<p><strong>Учитывая быстрый темп развития фреймворка Laravel, проект требует много усилий на поддержку, разработку и написание документации, поэтому любая помощь приветствуется.</strong></p>
<p>Надеюсь, вы останетесь довольны этим проектом.</p>
<p>- Anthony Rappa</p>',
    ],

    'emails'   => [
        'auth' => [
            'account_confirmed'         => 'Ваша учетная запись подтверждена.',
            'error'                     => 'Упс!',
            'greeting'                => 'Здравствуйте!',
            'regards'                 => 'С уважением,',
            'trouble_clicking_button'   => 'Если у вас возникли проблемы с нажатием ":action_text" кнопки, скопируйте и вставьте URL ниже в адресную строку браузера:',
            'thank_you_for_using_app'   => 'Спасибо за использование нашего приложения!',
            'password_reset_subject'    => 'Изменение пароля',
            'password_cause_of_email'   => 'Вы получили это письмо, потому что мы получили запрос на изменение пароля для Вашей учетной записи.',
            'password_if_not_requested' => 'Если вы не запрашивали запрос на изменение пароля, игнорируйте это сообщение и  никаких дополнительных действий не требуется.',
            'reset_password'            => 'Щелкните для изменения пароля',
            'click_to_confirm'          => 'Щелкните здесь, чтобы подтвердить вашу учетную запись:',
        ],

        'contact' => [
            'email_body_title' => 'У вас новое сообщение формы обратной связи. Подробности ниже:',
            'subject'          => 'Новое :app_name сообщение формы обратной связи!',
        ],
    ],
    'frontend' => [
        'test'  => 'Тест',
        'tests' => [
            'based_on'                       => [
                'permission' => 'Система доступа приложения на примере применения разрешения (й) в -',
                'role'       => 'Система доступа приложения на примере применения роли (ей) в -',
            ],
            'js_injected_from_controller'    => 'Javascript Injected from a Controller',
            'using_access_helper'            => [
                'array_permissions'     => 'Access Helper с массивом названий разрешений или их ID\'s, где пользователь обладает всеми правами.',
                'array_permissions_not' => 'Access Helper с массивом названий разрешений или их ID\'s, где пользователь не обладает всеми правами.',
                'array_roles'           => 'Access Helper с массивом имен ролей или их ID\'s, где пользователь обладает всеми правами.',
                'array_roles_not'       => 'Access Helper с массивом имен ролей или их ID\'s, где пользователь не обладает всеми правами.',
                'permission_id'         => 'Access Helper с ID названия разрешения',
                'permission_name'       => 'Access Helper с названием в разрешении',
                'role_id'               => 'Access Helper с ID роли',
                'role_name'             => 'Access Helper с именем роли',
            ],
            'using_blade_extensions'         => 'вьювере Blade Extensions',
            'view_console_it_works'          => 'Сообщение console, вы должны видеть \'it works!\' which is coming from FrontendController@index',
            'you_can_see_because'            => 'Вы видите это, потому что у вас роль \':role\'!',
            'you_can_see_because_permission' => 'Вы видите это, потому что у вас есть разрешение \':permission\'!',
        ],

        'general' => [
            'joined' => 'Зарегистрирован',
        ],

        'user'       => [
            'change_email_notice'  => 'При смене вашего нового E-mail, он будет перезаписан, и вы должны снова подтвердить свой новый E-mail.',
            'email_changed_notice' => 'Вы должны подтвердить Ваш новый E-mail, прежде чем вы сможете войти снова.',
            'password_updated'     => 'Пароль изменен.',
            'profile_updated'      => 'Профиль изменен.',
        ],
        'welcome_to' => 'Добро пожаловать в приложение :place',
    ],
];
