<?php

namespace App\Providers;

use App\Nova\Map;
use App\Nova\News;
use App\Nova\Page;
use App\Nova\User;
use App\Nova\Event;
use App\Nova\Slide;
use App\Nova\Gender;
use App\Nova\Gallery;
use App\Nova\Project;
use App\Nova\Sidebar;
use App\Nova\WdcTerm;
use App\Nova\Business;
use App\Nova\Download;
use App\Nova\Employee;
use App\Nova\FormType;
use Laravel\Nova\Nova;
use App\Nova\WdcMember;
use Eminiarts\Tabs\Tab;
use Laravel\Nova\Panel;
use Eminiarts\Tabs\Tabs;
use App\Nova\ActivityLog;
use App\Nova\CouncilTerm;
use App\Nova\DynamicForm;
use App\Nova\Publication;
use App\Nova\BusinessType;
use App\Nova\FormCategory;
use App\Nova\CouncilMember;
use App\Nova\ProjectStatus;
use Laravel\Nova\Menu\Menu;
use App\Nova\FormSubmission;
use App\Nova\JobApplication;
use App\Nova\JobOpportunity;
use App\Nova\PoliticalParty;
use App\Nova\UserAttachment;
use App\Policies\RolePolicy;
use Illuminate\Http\Request;
use App\Nova\EmployeeSection;
use App\Nova\HomePageSection;
use App\Nova\ProjectCategory;
use Laravel\Nova\Fields\Text;
use App\Nova\BusinessCategory;
use App\Nova\DownloadCategory;
use Laravel\Nova\Fields\Image;
use App\Nova\IdeaBoxSubmission;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Menu\MenuGroup;
use App\Nova\PublicationCategory;
use Laravel\Nova\Dashboards\Main;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Textarea;
use Outl1ne\NovaColorField\Color;
use App\Nova\CouncilorsAttendance;
use App\Policies\PermissionPolicy;
use Laravel\Nova\Menu\MenuSection;
use AlexAzartsev\Heroicon\Heroicon;
use App\Nova\ContactFormSubmission;
use Vyuldashev\NovaPermission\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Nova\ApplicationFormCategory;
use Hashtechnologies\TinyMce\TinyMce;
use Illuminate\Support\Facades\Blade;
use Outl1ne\NovaSettings\NovaSettings;
use App\Nova\ApplicationFormSubmission;
use Hashtechnologies\HashAdmin\HashAdmin;
use Vyuldashev\NovaPermission\Permission;
use HashTechnologies\ThaanaText\ThaanaText;
use Whitecube\NovaFlexibleContent\Flexible;
use Dniccum\NovaDocumentation\NovaDocumentation;
use Laravel\Nova\NovaApplicationServiceProvider;
use Trinityrank\GoogleMapWithAutocomplete\TRMap;
use Outl1ne\NovaSettings\Nova\Resources\Settings;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;
use Trinityrank\GoogleMapWithAutocomplete\TRLocation;
use Silvanite\NovaToolPermissions\NovaToolPermissions;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        // Using an array
        Heroicon::defaultIconSets(['solid', 'fa-brands']);
        // to make svg editor disabled by default for every field use this:
        Heroicon::defaultEditorEnable(false);



        /**=================================================================================================
                                            WEBSITE SETTINGS SECTION
        ================================================================================================= */
        \Outl1ne\NovaSettings\NovaSettings::addSettingsFields([
            Panel::make('Website Status & Maintenence Page', [
                Boolean::make('Publish Website', 'publish_website'),
                MediaHubField::make('Background Image', 'maintenence_page_background_image')
                    ->defaultCollection('default'),
                Text::make('Site Name', 'maintenence_site_name'),
                Text::make('Title', 'maintenence_page_title'),
                TinyMce::make('Content','maintenence_content'),
            ]),
        ], [], 'Website Status & Maintenence');
        \Outl1ne\NovaSettings\NovaSettings::addSettingsFields([
            Panel::make('Header', [
                MediaHubField::make('Full Logo En', 'header_logo_en')->defaultCollection('branding'),
                MediaHubField::make('Full Logo Dh', 'header_logo_dh')->defaultCollection('branding'),
                MediaHubField::make('Logo Icon', 'header_logo_icon')->defaultCollection('branding'),
                MediaHubField::make('National Emblem', 'header_logo_emblem')->defaultCollection('branding'),
                MediaHubField::make('Site Shortcut Icon', 'fav_icon')->defaultCollection('branding'),
                MediaHubField::make('Header Background Image', 'header_background')->defaultCollection('branding'),
                Text::make('Header Logo Text En', 'header_logo_text_en'),
                ThaanaText::make('Header Logo Text Dh', 'header_logo_text_dh'),
            ]),
            Panel::make('Video Landing Section', [
                //MediaHubField::make('Landing Image', 'landing_image'),
                Boolean::make('Enable?', 'enable_landing_video'),
                MediaHubField::make('Landing Video', 'landing_video')->defaultCollection('videos'),
                TinyMce::make('Intro Text English','intro_text_en'),
                TinyMce::make('Intro Text Dhivehi','intro_text_dh'),
                Color::make('Text Color', 'landing_section_text_color')->sketch(),
                Color::make('Text Shadow Color', 'landing_section_text_shadow_color')->sketch(),
                // Flexible::make('Quick Links', 'quick_links')->button('Add Link')
                //     ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\QuickLinkLayout::class),
            ]),
            Panel::make('Footer', [
                Textarea::make('Footer Copyright Text', 'footer_copyright_text'),
                MediaHubField::make('Footer Background Image', 'footer_bg')->defaultCollection('default'),
            ]),
            Panel::make('Design', [
                MediaHubField::make('Website Pattern General', 'website_pattern')->defaultCollection('branding'),
                MediaHubField::make('Website Pattern White', 'website_pattern_white')->defaultCollection('branding'),
                MediaHubField::make('Website Pattern Dark', 'website_pattern_dark')->defaultCollection('branding'),
                MediaHubField::make('Fallback Image for User', 'fallback_user_image')->defaultCollection('branding'),
                MediaHubField::make('Fallback Image for Elements', 'fallback_element_image')->defaultCollection('branding'),
            ]),
        ], [], 'Branding & Design');
        \Outl1ne\NovaSettings\NovaSettings::addSettingsFields([
            Panel::make('SEO Settings', [
                Text::make('OG Site Name', 'og_site_name'),
                Text::make('OG Title', 'og_title'),
                Textarea::make('Site Description', 'site_description')->withMeta(['extraAttributes' => [
                    'placeholder' => 'Site description here']
                ]),
                Textarea::make('Keywords', 'site_keywords')->withMeta(['extraAttributes' => [
                    'placeholder' => 'Site Keywords here']
                ])->help(
                    'Separate each keyword with a comma.'
                ),
                MediaHubField::make('Default OG Image', 'default_og_image')->defaultCollection('default'),
            ]),
        ], [], 'SEO Settings');
        \Outl1ne\NovaSettings\NovaSettings::addSettingsFields([
            Panel::make('Archive Pages', [
                MediaHubField::make('General Archive Page Image', 'archive_page_image')->defaultCollection('branding'),
                MediaHubField::make('Single Council Member Cover Image', 'single_council_member_cover_image')->defaultCollection('default'),
                MediaHubField::make('Single WDC Member Cover Image', 'single_wdc_member_cover_image')->defaultCollection('default'),
                // MediaHubField::make('Downloads Page Image', 'downloads_page_image')->defaultCollection('branding'),
                // MediaHubField::make('Announcements Archive Page Image', 'announcements_page_image')->defaultCollection('branding'),
                // MediaHubField::make('Press Releases Archive Page Image', 'press_releases_page_image')->defaultCollection('branding'),
                // MediaHubField::make('Council Policies Archive Page Image', 'council_policies_page_image')->defaultCollection('branding'),
                // MediaHubField::make('Agenda - General Meetings Archive Page Image', 'agenda_general_meetings_page_image')->defaultCollection('branding'),
                // MediaHubField::make('Yaumiyya - General Meetings Archive Page Image', 'yaumiyya_general_meetings_page_image')->defaultCollection('branding'),
            ]),
        ], [], 'Archive Pages');
        \Outl1ne\NovaSettings\NovaSettings::addSettingsFields([
            Panel::make('Default Language', [
                Select::make('Default Language', 'default_language')->options([
                    'en' => 'English',
                    'dh' => 'Dhivehi'
                ])
            ]),
        ], [], 'Language');
        \Outl1ne\NovaSettings\NovaSettings::addSettingsFields([
            Panel::make('Integrations & API', [
                Text::make('Google Analytics Measurement ID', 'google_analytics_measurement_id')->help(
                    'Google Analytics 4 (New)'
                ),
                Text::make('Google Analytics Tracking ID', 'google_analytics_tracking_id')->help(
                    'Google Analytics Universal (Old)'
                ),
                Text::make('Google Maps Api Key', 'google_maps_api_key')->help(
                    'Google Maps API Key'
                ),
                Text::make('PDF Express API Key', 'pdf_express_api_key')->help(
                    'Enter PDF.js Express Viewer API Key'
                ),
            ]),
        ], [], 'Integrations & API');
        \Outl1ne\NovaSettings\NovaSettings::addSettingsFields([
            Panel::make('Contact Details', [
                Text::make('Organization Name', 'org_name'),
                Textarea::make('Business Address', 'org_business_address'),
                Textarea::make('Mailing Address', 'org_mailing_address'),
                Textarea::make('Billing Address', 'org_billing_address'),
                Text::make('Phone', 'org_phone'),
                Text::make('Fax', 'org_fax'),
                Text::make('Email', 'org_email'),
            ]),
        ], [], 'Contact Details');
        \Outl1ne\NovaSettings\NovaSettings::addSettingsFields([
            Panel::make('Social Media Accounts', [
                Text::make('Facebook', 'facebook_handler')->help( 'Facebook username without "@".' ),
                Text::make('Twitter', 'twitter_handler')->help( 'Twitter username without "@".' ),
                Text::make('Instagram', 'instagram_handler')->help( 'Instagram username without "@".' ),
                Text::make('Linkedin', 'linkedin_handler')->help( 'Linkedin username without "@".' ),
                Text::make('Youtube', 'youtube_handler')->help( 'Youtube username without "@".' ),
                Text::make('Viber Community Link', 'viber_community_link')->help( 'Enter full viber community link.' ),
            ]),
        ], [], 'Social Media Accounts');
        \Outl1ne\NovaSettings\NovaSettings::addSettingsFields([
            Panel::make('Archive Pages', [
                Boolean::make('Enable Sharing', 'social_sharing'),
                Boolean::make('Facebook', 'facebook_share'),
                Text::make('Facebook Share App ID', 'facebook_sharing_app_id'),
                Boolean::make('Email', 'email_share'),
                Boolean::make('Twitter', 'twitter_share'),
                Boolean::make('Linkedin', 'linkedin_share'),
                Boolean::make('Viber', 'viber_share'),
                Boolean::make('WhatsApp', 'whatsapp_share'),
                Boolean::make('Telegram', 'telegram_share'),
            ]),
        ], [], 'Social Sharing');
        \Outl1ne\NovaSettings\NovaSettings::addSettingsFields([
            Panel::make('Application Form Declarations', [
                Textarea::make('Declaration English', 'application_form_dec_en'),
                Textarea::make('Declaration Dhivehi', 'application_form_dec_dh'),
            ]),
            Panel::make('Job Application Form Declarations', [
                Textarea::make('Declaration English', 'job_application_dec_en'),
                Textarea::make('Declaration Dhivehi', 'job_application_dec_dh'),
            ]),
        ], [], 'Form Declarations');
        \Outl1ne\NovaSettings\NovaSettings::addSettingsFields([
            Panel::make('Design', [
                MediaHubField::make('Logo', 'email_header_logo')->defaultCollection('default'),
                Text::make('Site Name', 'email_site_name'),
            ]),
            Panel::make('Admin Email Notifications', [
                Text::make('Website Admin Notifications', 'web_admin_email'),
            ]),
        ], [], 'Email Settings');
        \Outl1ne\NovaSettings\NovaSettings::addSettingsFields([
            Panel::make('Design', [
                Image::make('PDF Header', 'pdf_header_image'),
            ]),
            Panel::make('Job Application Form', [
                Text::make('Number Format', 'job_application_form_number_format'),
                Text::make('Form Title English', 'job_application_form_title_en'),
                ThaanaText::make('Form Title Dhivehi', 'job_application_form_title_dh'),
            ]),
        ], [], 'PDF Settings');
        \Outl1ne\NovaSettings\NovaSettings::addSettingsFields([
            Panel::make('Idea Box Notifications', [
                Flexible::make('Users', 'idea_box_users')->button('Add User')
                ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\UserSelectLayout::class),
            ]),
            Panel::make('Contact Form Notifications', [
                Flexible::make('Users', 'contact_form_users')->button('Add User')
                ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\UserSelectLayout::class),
            ]),
            Panel::make('Application Form Notifications', [
                Flexible::make('Users', 'application_form_users')->button('Add User')
                ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\UserSelectLayout::class),
            ]),
            Panel::make('Job Application Form Notifications', [
                Flexible::make('Users', 'job_application_form_users')->button('Add User')
                ->addLayout(\App\Nova\Flexible\Layouts\SpecialLayouts\UserSelectLayout::class),
            ]),
        ], [], 'Online Applications');
        \Outl1ne\NovaSettings\NovaSettings::addSettingsFields([
            Panel::make('Job Application Link', [
                Select::make('Job Application Form', 'online_job_application_link')->searchable()->nullable()->options(\App\Models\Page::pluck('name', 'slug'))->help('This will set the apply online button link in the single job opportunity page.'),
            ]),
        ], [], 'Job Applications');
        \Outl1ne\NovaSettings\NovaSettings::addSettingsFields([
            DateTime::make('Island Population Updated At', 'updated_at')->rules('required'),
            Panel::make('Male Population', [
                Number::make('18 & Below', 'm_18_and_below'),
                Number::make('18 - 35', 'm_18_35'),
                Number::make('36 - 64', 'm_36_64'),
                Number::make('64 & Above', 'm_64_and_above'),
            ]),
            Panel::make('Female Population', [
                Number::make('18 & Below', 'f_18_and_below'),
                Number::make('18 - 35', 'f_18_35'),
                Number::make('36 - 64', 'f_36_64'),
                Number::make('64 & Above', 'f_64_and_above'),
            ]),
        ], ['updated_at' => 'datetime',], 'Island Population');
        \Outl1ne\NovaSettings\NovaSettings::addSettingsFields([
            Panel::make('Island Information', [
                Text::make('Country English', 'country_en'),
                ThaanaText::make('Country Dhivehi', 'country_dh'),
                Number::make('Land Area', 'land_area'),
                Number::make('Postal Code', 'postal_code'),
                Number::make('Zip Code', 'zip_code'),
                Select::make('Closest Airport Map', 'closest_airport_id')->searchable()->nullable()->options(\App\Models\Map::pluck('title_en', 'id')),
                Text::make('Airport Map Page Link', 'airport_map_page_link'),
            ]),
        ], [], 'Island Information');
        // \Outl1ne\NovaSettings\NovaSettings::addSettingsFields([
        //     Panel::make('Stat Items', [
        //         Flexible::make('Stat Items', 'stat_items')->button('Add Stat')->stacked()
        //         ->addLayout(\App\Nova\Flexible\Layouts\IconStatItemLayout::class)
        //     ]),
        // ], [], 'Stats');
        if(ENV('DEPLOYMENT_COMPLETE') == true) {
            \Outl1ne\NovaSettings\NovaSettings::addSettingsFields([
            Select::make('Show in News', 'sidebar-news')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Galleries', 'sidebar-gallery')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Events', 'sidebar-event')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Projects', 'sidebar-project')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Footer', 'sidebar-footer')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Downloads', 'sidebar-download')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Announcements', 'sidebar-announcement')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Press Releases', 'sidebar-press-release')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Job Opportunities', 'sidebar-job')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Development Plans', 'sidebar-development-plan')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Development Plan Implementations', 'sidebar-development-plan-implementation')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Annual Budget', 'sidebar-annual-budget')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Annual Reports', 'sidebar-annual-report')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Activity Calendar', 'sidebar-activity-calendar')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Financial Statement', 'sidebar-financial-statement')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Legislation', 'sidebar-legislation')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Guidelines', 'sidebar-guideline')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Population Report', 'sidebar-population-report')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Income Report', 'sidebar-income-report')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Expenditure Report', 'sidebar-expenditure-report')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Councillors Attendance', 'sidebar-councillors-attendance')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Staff Attendance', 'sidebar-staff-attendance')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Audit Reports', 'sidebar-audit-report')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Council General Meeting Decisions', 'sidebar-decision-general-meeting')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Council General Meeting Agenda', 'sidebar-agenda-general-meeting')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Council General Meeting Yaumiyya', 'sidebar-yaumiyya-general-meeting')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Council Spontaneous Meeting Decisions', 'sidebar-decision-spontaneous-meeting')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Council Spontaneous Meeting Agenda', 'sidebar-agenda-spontaneous-meeting')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in Council Spontaneous Meeting Yaumiyya', 'sidebar-yaumiyya-spontaneous-meeting')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in WDC Announcements', 'sidebar-wdc-announcement')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in WDC Development Plans', 'sidebar-wdc-development-plan')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in WDC Annual Budget', 'sidebar-wdc-annual-budget')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in WDC Annual Reports', 'sidebar-wdc-annual-report')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in WDC Activity Calendar', 'sidebar-wdc-activity-calendar')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in WDC Financial Statement', 'sidebar-wdc-financial-statement')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in WDC Attendance', 'sidebar-wdc-attendance')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in WDC General Meeting Decisions', 'sidebar-wdc-decision-general-meeting')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in WDC General Meeting Agenda', 'sidebar-wdc-agenda-general-meeting')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in WDC General Meeting Yaumiyya', 'sidebar-wdc-yaumiyya-general-meeting')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in WDC Spontaneous Meeting Decisions', 'sidebar-wdc-decision-spontaneous-meeting')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in WDC Spontaneous Meeting Agenda', 'sidebar-wdc-agenda-spontaneous-meeting')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
            Select::make('Show in WDC Spontaneous Meeting Yaumiyya', 'sidebar-wdc-yaumiyya-spontaneous-meeting')->searchable()->nullable()->options(\App\Models\Sidebar::pluck('name', 'id')),
        ], [], 'Assign Sidebars');
        }
        /**=================================================================================================
                                            WEBSITE SETTINGS SECTION
        ================================================================================================= */



        Nova::footer(function ($request) {
            return Blade::render('
                Copyright ' . date('Y') . ' Hash Maldives. All Rights Reserved
                @env(\'prod\')
                    This is production!
                @endenv
            ');
        });
        Nova::mainMenu(function (Request $request) {
            $user = Auth::user();
            //Original return function of nova for just in case
            // return [];

            $list =  [
                MenuSection::dashboard(Main::class)->icon('chart-bar'),
                MenuItem::externalLink('Visit Site', env('APP_URL')),

                MenuSection::make('Administrative', [
                    MenuItem::resource(HomePageSection::class),
                    MenuItem::resource(Page::class),
                    MenuItem::resource(Sidebar::class),
                    MenuItem::resource(Map::class),
                ])->icon('document-text')->collapsable(),

                MenuSection::make('Contact Form & Idea Box', [
                    MenuItem::resource(ContactFormSubmission::class),
                    MenuItem::resource(IdeaBoxSubmission::class),
                    MenuItem::resource(UserAttachment::class),
                ])->icon('document-text')->collapsable(),

                MenuSection::make('Application Form Submissions', [
                    MenuItem::resource(ApplicationFormSubmission::class),
                    MenuItem::resource(ApplicationFormCategory::class),
                    MenuItem::resource(UserAttachment::class),
                ])->icon('document-text')->collapsable(),

                MenuSection::make('Job Opportunities & Applications', [
                    MenuItem::resource(JobOpportunity::class),
                    MenuItem::resource(JobApplication::class),
                ])->icon('document-text')->collapsable(),

                // MenuSection::make('Forms & Submissions', [
                //     MenuItem::resource(DynamicForm::class),
                //     MenuItem::resource(FormType::class),
                //     MenuItem::resource(FormCategory::class),
                //     MenuItem::resource(FormSubmission::class),
                //     MenuItem::resource(UserAttachment::class),
                // ])->icon('document-text')->collapsable(),

                MenuSection::make('Media & Updates', [
                    MenuItem::resource(News::class),
                    MenuItem::resource(Slide::class),
                    MenuItem::resource(Gallery::class),
                    MenuItem::resource(Event::class),
                ])->icon('document-text')->collapsable(),

                MenuSection::make('Downloads', [
                    MenuItem::resource(Download::class),
                    MenuItem::resource(DownloadCategory::class),
                ])->icon('document-text')->collapsable(),

                MenuSection::make('Projects', [
                    MenuItem::resource(Project::class),
                    MenuItem::resource(ProjectCategory::class),
                    MenuItem::resource(ProjectStatus::class),
                ])->icon('briefcase')->collapsable(),

                MenuSection::make('Council Members', [
                    MenuItem::resource(CouncilMember::class),
                    MenuItem::resource(CouncilTerm::class),
                    MenuItem::resource(Gender::class),
                    MenuItem::resource(PoliticalParty::class),
                ])->icon('user')->collapsable(),

                MenuSection::make('WDC Members', [
                    MenuItem::resource(WdcMember::class),
                    MenuItem::resource(WdcTerm::class),
                    MenuItem::resource(PoliticalParty::class),
                ])->icon('user')->collapsable(),

                MenuSection::make('Employees', [
                    MenuItem::resource(Employee::class),
                    MenuItem::resource(EmployeeSection::class),
                    MenuItem::resource(Gender::class),
                ])->icon('user')->collapsable(),

                MenuSection::make('Publications', [
                    MenuItem::resource(Publication::class),
                    MenuItem::resource(PublicationCategory::class),
                ])->icon('document-text')->collapsable(),

                MenuSection::make('Businesses', [
                    MenuItem::resource(Business::class),
                    MenuItem::resource(BusinessType::class),
                    MenuItem::resource(BusinessCategory::class),
                ])->icon('briefcase')->collapsable(),

                MenuSection::make('Users, Permissions & Activities', [
                    MenuItem::resource(User::class),
                    MenuItem::make('Two Factor Auth')->path('/nova-two-factor'),
                    MenuItem::resource(Permission::class),
                    MenuItem::resource(Role::class),
                    MenuItem::resource(ActivityLog::class),
                ])->icon('shield-check')->collapsable(),

            ];
            if(!empty($user)) {
                if($user->can('Access Media Hub')){
                    $list[] = MenuSection::make('Media Hub')->icon('folder')->path('/media-hub');
                }
            }
            if(!empty($user)) {
                if($user->can('Access Menu')){
                    $list[] = MenuSection::make('Navigation Menu')->icon('menu-alt-2')->path('/menus');
                }
            }
            if(!empty($user)) {
                if($user->can('Access System Log')){
                    $list[] = MenuSection::make('System Logs')->icon('document-text')->path('/logs-tool');
                }
            }
            if(!empty($user)) {
                if($user->can('Access Documentation')){
                    $list[] = MenuSection::make('Documentation')->icon('document-text')->path('/documentation');
                }
            }
            // if(!empty($user)) {
            //     if($user->can('Access Settings')){
            //         $list[] = MenuSection::make('Backups')->icon('document-text')->path('/backups');
            //     }
            // }
            if(!empty($user)) {
                if($user->can('Access Settings')){
                    $list[] = MenuSection::make('Settings', [ 
                        MenuItem::link('Website Status & Maintenence', '/nova-settings/website-status-maintenence'),
                        MenuItem::link('Branding & Design', '/nova-settings/branding-design'),
                        MenuItem::link('SEO Settings', '/nova-settings/seo-settings'),
                        MenuItem::link('Archive Pages', '/nova-settings/archive-pages'),
                        MenuItem::link('Language', '/nova-settings/language'),
                        MenuItem::link('Integrations & API', '/nova-settings/integrations-api'),
                        MenuItem::link('Contact Details', '/nova-settings/contact-details'),
                        MenuItem::link('Social Media Accounts', '/nova-settings/social-media-accounts'),
                        MenuItem::link('Social Sharing', '/nova-settings/social-sharing'),
                        MenuItem::link('Email Settings', '/nova-settings/email-settings'),
                        MenuItem::link('Online Applications', '/nova-settings/online-applications'),
                        MenuItem::link('PDF Settings', '/nova-settings/pdf-settings'),
                        MenuItem::link('Job Applications', '/nova-settings/job-applications'),
                        MenuItem::link('Island Population', '/nova-settings/island-population'),
                        MenuItem::link('Island Information', '/nova-settings/island-information'),
                        //MenuItem::link('Stats', '/nova-settings/stats'),
                        MenuItem::link('Form Declarations', '/nova-settings/form-declarations'),
                        MenuItem::link('Assign Sidebars', '/nova-settings/assign-sidebars'),
                    ])->icon('adjustments')->collapsable();

                }
            }
            return $list;
        });
        Nova::userMenu(function (Request $request, Menu $menu) {
            $menu->prepend(
                MenuItem::make(
                    'My Profile',
                    "/resources/users/{$request->user()->getKey()}/edit"
                ),
                MenuItem::make(
                    'Two Factor Auth',
                    "/nova-two-factor"
                )
            );

            return $menu;
        });
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                'admin@hash.mv',
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {

        $user = Auth::user();
        $list =  [
            \Vyuldashev\NovaPermission\NovaPermissionTool::make()
                ->rolePolicy(RolePolicy::class)
                ->permissionPolicy(PermissionPolicy::class),
            new HashAdmin,
            new \Visanduma\NovaTwoFactor\NovaTwoFactor(),
        ];
        if(!empty($user)) {
            if($user->can('Access Media Hub')){
                $list[] = new \Outl1ne\NovaMediaHub\MediaHub;
            }
            if($user->can('Access Menu')){
                $list[] = \Outl1ne\MenuBuilder\MenuBuilder::make();
            }
            if($user->can('Access Settings')){
                $list[] = new \Outl1ne\NovaSettings\NovaSettings;
                $list[] = new \Spatie\BackupTool\BackupTool();
            }
            if($user->can('Access System Log')){
                $list[] = new \KABBOUCHI\LogsTool\LogsTool();
            }
            if($user->can('Access Documentation')){
                $list[] = new NovaDocumentation;
            }
        }
        return $list;
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
