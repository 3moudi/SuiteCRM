<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_FROM_ADDR' => 'عنوان "المرسل":',
    'LBL_REPLY_ADDR' => 'عنوان "الرد إلى":',
    'LBL_REPLY_NAME' => 'اسم "الرد إلى":',

    'LBL_MODULE_NAME' => 'الحملات',
    'LBL_MODULE_TITLE' => 'الحملات: الرئيسية',
    'LBL_SEARCH_FORM_TITLE' => 'بحث الحملات',
    'LBL_LIST_FORM_TITLE' => 'قائمة الحملات',
    'LBL_NEWSLETTER_LIST_FORM_TITLE' => 'قائمة النشرة الإخبارية',
    'LBL_CAMPAIGN_NAME' => 'الاسم:',
    'LBL_CAMPAIGN' => 'الحملة:',
    'LBL_NAME' => 'الاسم:',
    'LBL_INVITEE' => 'جهات الإتصال',
    'LBL_LIST_CAMPAIGN_NAME' => 'حملة',
    'LBL_LIST_STATUS' => 'الحالة',
    'LBL_LIST_TYPE' => 'النوع',
    'LBL_LIST_START_DATE' => 'تاريخ البدء',
    'LBL_LIST_END_DATE' => 'تاريخ الانتهاء',
    'LBL_DATE_ENTERED' => 'تاريخ الإنشاء',
    'LBL_DATE_MODIFIED' => 'تاريخ التعديل',
    'LBL_MODIFIED' => 'عدل بواسطة:',
    'LBL_CREATED' => 'أنشئ بواسطة:',
    'LBL_TEAM' => 'الفريق:',
    'LBL_ASSIGNED_TO' => 'أُسند إلى:',
    'LBL_ASSIGNED_TO_ID' => 'أُسند إلى:',
    'LBL_ASSIGNED_TO_NAME' => 'أُسند إلى:',
    'LBL_CAMPAIGN_START_DATE' => 'تاريخ البدء:',
    'LBL_CAMPAIGN_END_DATE' => 'تاريخ الإنتهاء:',
    'LBL_CAMPAIGN_STATUS' => 'الحالة:',
    'LBL_CAMPAIGN_BUDGET' => 'الميزانية:',
    'LBL_CAMPAIGN_EXPECTED_COST' => 'التكلفة المتوقعة:',
    'LBL_CAMPAIGN_ACTUAL_COST' => 'التكلفة الفعلية:',
    'LBL_CAMPAIGN_EXPECTED_REVENUE' => 'العائد المتوقع:',
    'LBL_CAMPAIGN_IMPRESSIONS' => 'الانطباعات:',
    'LBL_CAMPAIGN_COST_PER_IMPRESSION' => 'تكلفة الانطباع الواحد:',
    'LBL_CAMPAIGN_COST_PER_CLICK_THROUGH' => 'تكلفة فتح الرابط الواحد:',
    'LBL_CAMPAIGN_OPPORTUNITIES_WON' => 'الفرص المحققة:',
    'LBL_CAMPAIGN_TYPE' => 'النوع:',
    'LBL_CAMPAIGN_OBJECTIVE' => 'الهدف:',
    'LBL_CAMPAIGN_CONTENT' => 'الوصف:',
    'LBL_CAMPAIGN_INACTIVE_SCHEDULE' => "الحملة ''{0}' حالتها 'غير نشط'. يجب عليك ضبط حالة الحملة لتكون 'نشط'.",
    'LNK_NEW_CAMPAIGN' => 'إنشاء حملة (تقليدي)',
    'LNL_NEW_CAMPAIGN_WIZARD' => 'إنشاء حملة',
    'LNK_CAMPAIGN_LIST' => 'عرض الحملات',
    'LNK_IMPORT_CAMPAIGNS' => 'استيراد الحملات',
    'LNK_NEW_PROSPECT' => 'انشاء هدف',
    'LNK_PROSPECT_LIST' => 'عرض المستهدفين',
    'LNK_NEW_PROSPECT_LIST' => 'إنشاء قائمة للمستهدفين',
    'LNK_PROSPECT_LIST_LIST' => 'عرض قوائم المستهدفين',
    'LBL_MODIFIED_BY' => 'عدل بواسطة:',
    'LBL_CREATED_BY' => 'أنشئ بواسطة:',
    'LBL_TRACKER_TITLE' => 'تفاصيل المتعقب',
    'LBL_TRACKER_KEY' => 'المتعقب:',
    'LBL_TRACKER_URL' => 'رابط المتعقب:',
    'LBL_TRACKER_TEXT' => 'نص رابط المتعقب:',
    'LBL_TRACKER_COUNT' => 'عدد المتعقب:',
    'LBL_REFER_URL' => 'رابط إعادة التوجيه للمتعقب:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'الحملات',
    'LBL_NEW_FORM_TITLE' => 'حملة جديدة',
    'LBL_TRACKED_URLS' => 'روابط المتعقب',
    'LBL_TRACKED_URLS_SUBPANEL_TITLE' => 'روابط المتعقب',
    'LBL_CAMPAIGN_ACCOUNTS_SUBPANEL_TITLE' => 'الحسابات',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'قائمة المستهدفين',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'التاريخ',
    'LBL_EMAIL_MARKETING_SUBPANEL_TITLE' => 'التسويق بالبريد الإلكتروني',
    'LNK_NEW_EMAIL_TEMPLATE' => 'إنشاء قالب بريد إلكتروني',
    'LNK_EMAIL_TEMPLATE_LIST' => 'عرض قوالب البريد الإلكتروني',
    'LBL_TRACK_BUTTON_TITLE' => 'عرض الحالة',
    'LBL_TRACK_BUTTON_LABEL' => 'عرض الحالة',
    'LBL_QUEUE_BUTTON_TITLE' => 'إرسال رسائل البريد الإلكتروني',
    'LBL_QUEUE_BUTTON_LABEL' => 'إرسال رسائل البريد الإلكتروني',
    'LBL_TEST_BUTTON_TITLE' => 'أرسل رسالة تجريبية',
    'LBL_TEST_BUTTON_LABEL' => 'أرسل رسالة تجريبية',
    'LBL_COPY_AND_PASTE_CODE' => 'أو قم بنسخ ولصق شفرة html أدناه في صفحة موجودة',
    'LBL_CHARSET_NOTICE' => 'ملاحظة: يرجى التأكد من أن الصفحة التي تحتوي على نموذج ويب-إلى-عميل-محتمل (web-to-lead) تحتوي على الأسطر التالية في قسم &lt;head&gt;:',

    'LBL_TODETAIL_BUTTON_TITLE' => 'عرض التفاصيل',
    'LBL_TODETAIL_BUTTON_LABEL' => 'عرض التفاصيل',

    'LBL_DEFAULT' => 'جميع قوائم المستهدفين',
    'LBL_MESSAGE_QUEUE_TITLE' => 'قائمة انتظار الرسائل',

    'LBL_LOG_ENTRIES_TARGETED_TITLE' => 'الرسالة أرسلت/محاولة',
    'LBL_LOG_ENTRIES_SEND_ERROR_TITLE' => 'الرسائل الراجعة بسبب خطأ، أخرى',
    'LBL_LOG_ENTRIES_INVALID_EMAIL_TITLE' => 'الرسائل الراجعة بسبب خطأ عنوان البريد الإلكتروني',
    'LBL_LOG_ENTRIES_LINK_TITLE' => 'النقر على الرابط',
    'LBL_LOG_ENTRIES_VIEWED_TITLE' => 'رسائل شوهدت',
    'LBL_LOG_ENTRIES_REMOVED_TITLE' => 'ترك القائمة البريدية',
    'LBL_LOG_ENTRIES_LEAD_TITLE' => 'عميل مُحتمل أُنشئ',
    'LBL_CAMPAIGN_LEAD_SUBPANEL_TITLE' => 'مُهتمون',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'فرص بيع',
    'LBL_LOG_ENTRIES_CONTACT_TITLE' => 'جهات إتصال أُنشئت',

    //error messages.
    'ERR_SENDING_NOW' => 'جاري تسليم الرسائل، الرجاء المحاولة لاحقاً.',

    'LBL_TRACK_ROI_BUTTON_LABEL' => 'عرض عائد الاستثمار (ROI)',
    'LBL_TRACK_DELETE_BUTTON_TITLE' => 'حذف مدخلات الاختبار',
    'LBL_TRACK_DELETE_BUTTON_LABEL' => 'حذف مدخلات الاختبار',
    'LBL_TRACK_DELETE_CONFIRM' => 'سيؤدي هذا الخيار إلى حذف مدخلات السجل التي تم إنشاؤها بواسطة التشغيل التجريبي. هل تريد المتابعة؟',
    'ERR_NO_MAILBOX' => "رسائل التسويق التالية ليس لها حساب بريد مرتبط بها.<BR>الرجاء تصحيح ذلك قبل المتابعة.",
    'LBL_LIST_TO_ACTIVITY' => 'عرض الحالة',
    'LBL_CURRENCY' => 'العملة:',
    'LBL_TARGETED' => 'مستهدف',
    'LBL_TOTAL_TARGETED' => 'المجموع المستهدف',
    'LBL_CAMPAIGN_FREQUENCY' => 'وتيرة التكرار:',
    'LBL_NEWSLETTERS' => 'عرض النشرات الإخبارية',
    'LBL_NEWSLETTER' => 'نشرات إخبارية',
    'LBL_SURVEY' => 'الاستطلاع',
    'LBL_NEWSLETTER_FORENTRY' => 'NewsLetter',
    'LBL_CREATE_NEWSLETTER' => 'إنشاء نشرة إخبارية',
    'LBL_LIST_NAME' => 'الاسم',
    'LBL_INBOUND_EMAIL_SETTINGS' => 'إعدادات البريد الوارد',
    'LBL_INBOUND_EMAIL_SETTINGS_TITLE' => 'إعدادات البريد الإلكتروني الوارد (معلومات)',
    'LBL_INBOUND_EMAIL_CREATE' => 'إنشاء بريد إلكتروني وارد',
    'LBL_INBOUND_EMAIL_CREATE_TITLE' => 'إنشاء بريد إلكتروني وارد (معلومات)',
    'LBL_STATUS_TEXT' => 'الحالة:',
    'LBL_FROM_MAILBOX_NAME' => 'حساب معالجة البريد المرتد:',
    'LBL_FROM_MAILBOX_TITLE' => 'حساب معالجة البريد المرتد:',
    'LBL_OUTBOUND_MAILBOX_NAME' => 'حساب البريد الإلكتروني الصادر:',
    'LBL_FROM_NAME' => 'اسم المرسِل:',
    'LBL_START_DATE_TIME' => 'جدولة التاريخ و الوقت:',
    'LBL_DATE_START' => 'تاريخ البدء',
    'LBL_TIME_START' => 'وقت البدء',
    'LBL_TEMPLATE' => 'قالب البريد الإلكتروني:',
    'LBL_TEMPLATE_FIELD' => 'قالب البريد الإلكتروني:',
    'LBL_SUBJECT' => 'الموضوع:',
    'LBL_WIDTH' => 'العرض الافتراضي:',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'أنشئ',
    'LBL_MESSAGE_FOR' => 'أرسل هذه الرسالة إلى:',
    'LBL_FINISH' => 'إنتهى',
    'LBL_ALL_PROSPECT_LISTS' => 'جميع القوائم المستهدفة في الحملة.',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'حرر',
    'LBL_EMAIL_SETUP_WIZARD' => 'تهيئة البريد الإلكتروني',
    'LBL_DIAGNOSTIC_WIZARD' => 'عرض التشخيص',
    'LBL_ALREADY_SUBSCRIBED_HEADER' => 'النشرات الإخبارية المشترك فيها',
    'LBL_UNSUBSCRIBED_HEADER' => 'متوفر/رسائل إخبارية غير مشترك بها',
    'LBL_UNSUBSCRIBED_HEADER_EXPL' => 'نقل النشرة الإخبارية إلى قائمة النشرات الإخبارية المتوفرة/النشرات الإخبارية غير المشترك بها سيضيف جهة الاتصال إلى قائمة إلغاء الاشتراك لهذه النشرة الإخبارية. لن يحذف جهة الاتصال من قائمة الاشتراك الأصلية أو قائمة المستهدفين.',
    'LBL_FILTER_CHART_BY' => 'فرز المخطط البياني بناء على:',
    'LBL_MANAGE_SUBSCRIPTIONS_TITLE' => 'إدارة الإشتراكات',
    'LBL_MARK_AS_SENT' => 'وسمه كمرسل',
    'LBL_DEFAULT_LIST_ENTRIES_WERE_PROCESSED' => 'تم معالجة المدخلات',
    //newsletter wizard
    'LBL_EDIT_TRACKER_NAME' => 'اسم المتتبع',
    'LBL_EDIT_TRACKER_URL' => 'رابط المتعقب',
    'LBL_EDIT_OPT_OUT_' => 'رابط الانسحاب؟',
    'LBL_EDIT_OPT_OUT' => 'رابط الانسحاب:',
    'LBL_UNSUBSCRIPTION_LIST_NAME' => 'قائمة إلغاء الاشتراك:',
    'LBL_SUBSCRIPTION_LIST_NAME' => 'قائمة الاشتراك:',
    'LBL_TEST_LIST_NAME' => 'قائمة الاختبار:',
    'LBL_UNSUBSCRIPTION_TYPE_NAME' => 'إلغاء الاشتراك',
    'LBL_SUBSCRIPTION_TYPE_NAME' => 'الاشتراك',
    'LBL_TEST_TYPE_NAME' => 'اختبار',
    'LBL_UNSUBSCRIPTION_LIST' => 'قائمة إلغاء الاشتراك',
    'LBL_SUBSCRIPTION_LIST' => 'قائمة الاشتراك',
    'LBL_MRKT_NAME' => 'اسم البريد الإلكتروني للتسويق',
    'LBL_MRKT_NAME_FIELD' => 'اسم البريد الإلكتروني للتسويق:',
    'LBL_TEST_LIST' => 'قائمة الاختبار',
    'LBL_WIZARD_HEADER_MESSAGE' => 'املأ الحقول المطلوبة للمساعدة في تحديد الحملة.',
    'LBL_WIZARD_BUDGET_MESSAGE' => 'أدخل الميزانية لاحتساب عائد الاستثمار (ROI)',
    'LBL_WIZARD_TARGET_MESSAGE1' => 'حدد أو أنشئ قائمة مستهدفة لاستخدامها مع حملتك. سيتم استخدام هذه القائمة أثناء إرسال رسائل البريد الإلكتروني متضمنة رسائل التسويق الخاصة بك.',
    'LBL_WIZARD_TARGET_MESSAGE2' => 'إنشاء قائمة جديدة للمستهدفين:',
    'LBL_WIZARD_TRACKER_MESSAGE' => 'حدد عنوان URL للمتعقب هنا لاستخدامه مع هذه الحملة. يجب عليك إدخال الاسم و عنوان URL لإنشاء المتعقب.',
    'LBL_HOME_START_MESSAGE' => 'ما هي الحملة التي ترغب في إنشائها؟',
    'LBL_WIZARD_LAST_STEP_MESSAGE' => '             أنت بالفعل في الخطوة الأخيرة.',
    'LBL_WIZARD_FIRST_STEP_MESSAGE' => '             أنت بالفعل في الخطوة الأولى.',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP1' => 'ترويسة الحملة',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP2' => 'ميزانية الحملة',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP3' => 'روابط متعقبات الحملة',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP4' => 'معلومات الاشتراك',
    'LBL_WIZ_MARKETING_TITLE' => 'البريد الإلكتروني التسويقي',
    'LBL_WIZ_SENDMAIL_TITLE' => 'حدد سجل البريد الإلكتروني التسويقي',
    'LBL_WIZ_EMAILTPL_TITLE' => 'حدد قالب البريد الإلكتروني',
    'LBL_WIZ_NEWSLETTER_TITLE_SUMMARY' => 'ملخص',
    'LBL_NAVIGATION_MENU_GEN1' => 'ترويسة الحملة',
    'LBL_NAVIGATION_MENU_GEN2' => 'الميزانية',
    'LBL_NAVIGATION_MENU_TRACKERS' => 'متتبعات',
    'LBL_NAVIGATION_MENU_MARKETING' => 'التسويق',
    'LBL_NAVIGATION_MENU_SEND_EMAIL' => 'إرسال البريد',
    'LBL_NAVIGATION_MENU_SUBSCRIPTIONS' => 'الاشتراكات',
    'LBL_NAVIGATION_MENU_SUMMARY' => 'ملخص',
    'LBL_NAVIGATION_MENU_SEND_EMAIL_AND_SUMMARY' => 'إرسال البريد الإلكتروني والموجز',
    'LBL_SUBSCRIPTION_TARGET_WIZARD_DESC' => 'هذا سيحدد القائمة المستهدفة ذات النوع (اشتراك) في هذه الحملة.<br>  هذه القائمة المستهدفة سيتم استخدامها لإرسال رسائل البريد الإلكتروني لهذه الحملة. <br>إذا لم يكن لديك قائمة جاهزة، سيتم إنشاء قائمة فارغة لك.',
    'LBL_UNSUBSCRIPTION_TARGET_WIZARD_DESC' => 'هذا سيحدد القائمة المستهدفة ذات النوع (إلغاء الاشتراك) لهذه الحملة. <br>هذه القائمة المستهدفة سوف تحتوي على أسماء الأشخاص الذين اختاروا الخروج من حملتك ويجب عدم الاتصال بهم عن طريق البريد الإلكتروني. <br>إذا لم يكن لديك قائمة جاهزة، سيتم إنشاء قائمة فارغة لك.',
    'LBL_TEST_TARGET_WIZARD_DESC' => 'هذا سيحدد القائمة المستهدفة ذات النوع (اختبار) لهذه الحملة. <br>سيتم استخدام هذه القائمة المستهدفة لإرسال رسائل البريد الإلكتروني التجريبية لهذه الحملة.<br>إذا لم يكن لديك قائمة جاهزة، سيتم إنشاء قائمة فارغة لك.',
    'LBL_ADD_TRACKER' => 'إنشاء متغقب',
    'LBL_CREATE_TARGET' => 'أنشئ',
    'LBL_SELECT_TARGET' => 'استخدام قائمة الاستهداف الحالية',
    'LBL_REMOVE' => 'قم بإزالة',
    'LBL_START' => 'ابدأ',
    'LBL_TOTAL_ENTRIES' => 'المدخلات',
    'LBL_CONFIRM_SEND_SAVE' => 'أنت على وشك المغادرة والمضي قدما في إرسال رسالة البريد الإلكتروني. هل ترغب في الحفظ والمتابعة؟',
    'LBL_NEWSLETTER WIZARD_TITLE' => 'النشرة الإخبارية:',
    'LBL_NEWSLETTER_WIZARD_START_TITLE' => 'تحرير النشرة الإخبارية:',
    'LBL_CAMPAIGN_WIZARD_START_TITLE' => 'تحرير الحملة:',
    'LBL_SEND_AS_TEST' => 'إرسال البريد الإلكتروني التسويقي كاختبار',
    'LBL_SAVE_EXIT_BUTTON_LABEL' => 'حفظ',
    'LBL_SAVE_CONTINUE_BUTTON_LABEL' => 'التالي',
    'LBL_TARGET_LISTS' => 'قوائم المستهدفين',
    'LBL_NO_SUBS_ENTRIES_WARNING' => 'لا يمكنك إرسال بريد إلكتروني تسويقي حتى تحتوي قائمة الاشتراك على عنصر واحد على الأقل. يمكنك تعبئة القائمة الخاصة بك بعد الانتهاء.',
    'LBL_NO_TARGET_ENTRIES_WARNING' => 'لا يمكنك إرسال بريد إلكتروني تسويقي حتى تحتوي قائمة المستهدفين على عنصر واحد على الأقل. يمكنك تعبئة القائمة الخاصة بك بعد الانتهاء.',
    'LBL_NO_TARGETS_WARNING' => 'لا يمكنك إرسال بريد إلكتروني تسويقي حتى تحتوي حملتك على قائمة مستهدفة واحدة على الأقل.',
    'LBL_NO_TARGET_ENTRIES_WARNING_NON_EMAIL' => 'ليس لديك مستهدفات مرتبطة في قائمة (قوائم) الأهداف المحددة لهذه الحملة. يمكنك تعبئة القائمة الخاصة بك بعد الانتهاء.',
    'LBL_NO_TARGETS_WARNING_NON_EMAIL' => 'لم تقم باختيار القائمة المستهدفة لهذه الحملة.',
    'LBL_NONE' => 'لم يتم الإنشاء',
    'LBL_CAMPAIGN_WIZARD' => 'المساعد الآلي للحملات',
    'LBL_EMAIL' => 'بريد إلكتروني',
    'LBL_OTHER_TYPE_CAMPAIGN' => 'حملة غير معتمدة على البريد الإلكتروني',
    'LBL_TARGET_LIST' => 'قائمة المستهدفين',
    'LBL_TARGET_TYPE' => 'نوع قائمة المستهدفين:',
    'LBL_TARGET_NAME' => 'اسم قائمة الهدف',
    'LBL_NUMBER_OF_TARGET' => 'عدد المستهدفين',
    'LBL_EMAILS_SCHEDULED' => 'البريد الإلكتروني المجدول',
    'LBL_TEST_EMAILS_SENT' => 'رسائل اختبار البريد الإلكتروني المرسلة',
    'LBL_USERS_CANNOT_OPTOUT' => 'لا يمكن لمستخدمي النظام اختيار عدم تلقي رسائل البريد الإلكتروني.',
    'LBL_ELECTED_TO_OPTOUT' => 'لقد اخترت عدم تلقي رسائل البريد الإلكتروني.',
    'LBL_COPY_OF' => 'نسخة من',
    'LBL_SAVED_SEARCH' => 'البحث المحفوظ ومظهره',
    //email setup wizard
    'LBL_WIZ_FROM_NAME' => 'اسم المرسِل:',
    'LBL_WIZ_FROM_ADDRESS' => 'عنوان المرسل:',
    'LBL_EMAILS_PER_RUN' => 'عدد رسائل البريد الإلكتروني المرسلة لكل دفعة:',
    'LBL_CUSTOM_LOCATION' => 'تعريف المستخدم',
    'LBL_DEFAULT_LOCATION' => 'الإفتراضي',
    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'يسمح ففط بالأعداد الصحيحة لعدد رسائل البريد الإلكتروني المرسلة لكل دفعة',
    'LBL_LOCATION_TRACK' => 'موقع ملفات تعقب الحملات (مثل campaign_tracker.php):',
    'LBL_MAIL_SENDTYPE' => 'وكيل نقل البريد:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'هل أستخدم نظام المصادقة الخاص بـ SMTP؟',
    'LBL_MAIL_SMTPPASS' => 'كلمة مرور SMTP:',
    'LBL_MAIL_SMTPPORT' => 'منفذ  \\"SMTP\\"',
    'LBL_MAIL_SMTPSERVER' => 'خادم SMTP',
    'LBL_MAIL_SMTPUSER' => 'إسم مستخدم SMTP',
    'LBL_EMAIL_SETUP_WIZARD_TITLE' => 'تهيئة البريد الإلكتروني للحملات',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'قيمة إعداد Config.php site_url',
    'LBL_NOTIFY_TITLE' => 'خيارات إشعارات البريد الإلكتروني',
    'LBL_MASS_MAILING_TITLE' => 'خيارات البريد الحماعي',
    'LBL_SERVER_TYPE' => 'بروتوكول خادم البريد',
    'LBL_SERVER_URL' => 'عنوان خادم البريد',
    'LBL_LOGIN' => 'اسم المستخدم',
    'LBL_PORT' => 'منفذ خادم البريد',
    'LBL_MAILBOX_NAME' => 'اسم حساب البريد:',
    'LBL_PASSWORD' => 'كلمة السر',
    'LBL_MAILBOX_DEFAULT' => 'الوارد',
    'LBL_MAILBOX' => 'مجلد مراقب',
    'LBL_NAVIGATION_MENU_SETUP' => 'تهيئة إعدادات البريد الإلكتروني',
    'LBL_NAVIGATION_MENU_NEW_MAILBOX' => 'حساب بريد جديد',
    'LBL_MAILBOX_CHECK_WIZ_GOOD' => 'تم اكتشاف حسابات بريدية تقوم بالتعامل مع البريد المرتد. لست بحاجة إلى إنشاء حساب جديد، ولكن لا يزال بإمكانك القيام بذلك أدناه.',
    'LBL_MAILBOX_CHECK_WIZ_BAD' => 'لم يتم اكتشاف أي حسابات بريد إلكتروني يقوم بالتعامل مع البريد المرتد، يرجى إنشاء حساب جديد أدناه.',
    'LBL_CAMP_MESSAGE_COPY' => 'الاحتفاظ بنسخ من رسائل الحملة الإعلانية:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'هل ترغب في تخزين نسخ كاملة من <bold>لكل</bold> رسالة البريد الإلكتروني المرسلة خلال جميع الحملات؟  <bold>نحن نوصي افتراضيا بعمل لا</bold>. سيؤدي اختيار "لا" إلى تخزين القالب الذي تم إرساله والمتغيرات المطلوبة لإعادة إنشاء الرسالة الفردية فقط.',
    'LBL_YES' => 'نعم',
    'LBL_NO' => 'لا',
    'LBL_EMAIL_SETUP_DESC' => 'املأ النموذج أدناه لتعديل إعدادات النظام الخاص بك حتى يمكن إرسال رسائل البريد الإلكتروني للحملة.',
    'LBL_CREATE_MAILBOX' => 'إنشاء حساب بريد جديد',
    'LBL_SSL_DESC' => 'إذا كان خادم البريد الخاص بك يدعم اتصالات المقبس الآمنة، فإن تمكين هذا الخيار سيفرض اتصالات SSL عند استيراد البريد الإلكتروني.',
    'LBL_SSL' => 'استخدم SSL',
    //campaign diagnostics
    'LNK_CAMPAIGN_DIGNOSTIC_LINK' => 'قد لا تعمل الحملة الإعلانية كما هو مرغوب ولا يمكن إرسال رسائل البريد الإلكتروني الخاصة بك للأسباب التالية:',
    'LBL_CAMPAIGN_DIAGNOSTICS' => 'تشخيص الحملة الإعلانية',
    'LBL_MAILBOX_CHECK1_GOOD' => ' حسابات بريدية) تم رصدها لها القدرة على التعامل مع البريد المرتد:',
    'LBL_MAILBOX_CHECK1_BAD' => 'لم يتم العثور على حسابات بريدية لها القدرة على التعامل مع البريد المرتد.',
    'LBL_MAILBOX_CHECK2_GOOD' => ' تمت تهيئة إعدادات البريد الإلكتروني:',
    'LBL_MAILBOX_CHECK2_BAD' => 'الرجاء تهيئة عنوان البريد الإلكتروني الخاص بك. لم يتم تهيئة إعدادات البريد الإلكتروني أو أنها غير صالحة. يجب ألا يحتوي عنوان \\"المرسل\\" على example.com.',
    'LBL_SCHEDULER_CHECK_GOOD' => 'تم رصد مجدولات',
    'LBL_SCHEDULER_CHECK_BAD' => 'لم يتم العثور على مجدولات',
    'LBL_SCHEDULER_CHECK1_BAD' => 'لم يتم إعداد المجدول لمعالجة رسائل البريد الإلكتروني المرتدة المرتبطة بالحملة.',
    'LBL_SCHEDULER_CHECK2_BAD' => 'لم يتم إعداد المجدول لمعالجة رسائل البريد الإلكتروني المرتبطة بالحملة.',
    'LBL_SCHEDULER_NAME' => 'المجدول',
    'LBL_SCHEDULER_STATUS' => 'الحالة',
    'LBL_EMAIL_SETUP_WIZ' => 'تشغيل إعداد البريد الإلكتروني',
    'LBL_SCHEDULER_LINK' => 'اذهب إلى شاشة إدارة المجدول.',
    'LBL_TO_WIZARD_TITLE' => 'تشغيل المساعد الآلي',
    'LBL_EDIT_EXISTING' => 'تحرير الحملة',
    'LBL_SEND_EMAIL' => 'إرسال البريد في الوقت المجدول',
    'LBL_CREATE_NEW_MARKETING_EMAIL' => 'إنشاء بريد إلكتروني جديد للتسويق',
    'LBL_NON_ADMIN_ERROR_MSG' => 'الرجاء إخطار مدير النظام الخاص بك لتصحيح هذه المشكلة',
    'LBL_EMAIL_COMPONENTS' => 'مكونات البريد الإلكتروني',
    'LBL_SCHEDULER_COMPONENTS' => 'مكونات المجدول',
    'LBL_RECHECK_BTN' => 'إعادة فحص',
    //web to lead wizard titles
    'LBL_DEFINE_LEAD_HEADER' => 'ترويسة النموذج:',
    'LBL_LEAD_DEFAULT_HEADER' => 'نموذج ويب إلى عميل محتمل للحملة',
    'LBL_DEFINE_LEAD_SUBMIT' => 'الاسم على زر التسليم:',
    'LBL_DEFINE_LEAD_POST_URL' => 'رابط النشر:',
    'LBL_EDIT_LEAD_POST_URL' => 'تحرير رابط النشر؟',
    'LBL_DEFINE_LEAD_REDIRECT_URL' => 'رابط إعادة التوجيه:',
    'LBL_LEAD_NOTIFY_CAMPAIGN' => 'حملة ذات صلة:',
    'LBL_DEFAULT_LEAD_SUBMIT' => 'موافق',
    'LBL_WEB_TO_LEAD' => 'إنشاء نموذج شخص',
    'LBL_LEAD_FOOTER' => 'تذييل النموذج:',
    'NTC_NO_LEGENDS' => '--لا شيء--',
    'NTC_DELETE_CONFIRMATION' => 'هل أنت متأكد من أنك تريد حذف هذا السجل؟',
    'NTC_SNOOZE_CONFIRMATION' => 'هل أنت متأكد من أنك تريد الغفوة؟',
    'LBL_DESCRIPTION_LEAD_FORM' => 'وصف النموذج:',
    'LBL_DESCRIPTION_TEXT_LEAD_FORM' => 'تسليم هذا النموذج سوف ينشئ عميلا محتملا ويربط مع الحملة',
    'LBL_DOWNLOAD_TEXT_WEB_TO_LEAD_FORM' => 'الرجاء تنزيل نموذج ويب إلى عميل محتمل الخاص بك',
    'LBL_DOWNLOAD_WEB_TO_LEAD_FORM' => 'نموذج ويب إلى شخص',
    'LBL_PROVIDE_WEB_TO_LEAD_FORM_FIELDS' => 'يرجى تقديم جميع الحقول الإلزامية',
    'LBL_NOT_VALID_EMAIL_ADDRESS' => 'عنوان البريد الإلكتروني غير صالح',
    'LBL_SELECT_REQUIRED_LEAD_FIELDS' => 'الرجاء تحديد الحقول الإلزامية:',
    //Campaign charts
    'LBL_CAMPAIGN_RETURN_ON_INVESTMENT' => 'عائد الاستثمار للحملة',
    'LBL_CAMPAIGN_RESPONSE_BY_RECIPIENT_ACTIVITY' => 'الاستجابة للحملة الإعلانية من خلال نشاط المستلمين',
    'LBL_LOG_ENTRIES_BLOCKEDD_TITLE' => 'تم تغطيتها بواسطة عنوان البريد الإلكتروني أو النطاق',

    'LBL_AMOUNT_IN' => 'المبلغ بـ',

    // Labels for ROI Chart
    'LBL_ROI_CHART_REVENUE' => 'الإيرادات',
    'LBL_ROI_CHART_INVESTMENT' => 'الاستثمار',
    'LBL_ROI_CHART_BUDGET' => 'الميزانية',
    'LBL_ROI_CHART_EXPECTED_REVENUE' => 'الإيرادات المتوقعة',

    // Top Campaigns Dashlet
    'LBL_TOP_CAMPAIGNS' => 'أعلى الحملات',
    'LBL_TOP_CAMPAIGNS_NAME' => 'اسم الحملة',
    'LBL_TOP_CAMPAIGNS_REVENUE' => 'الإيرادات',
    'LBL_TOP_CAMPAIGNS_DESCRIPTION' => 'أعلى الحملات أداءً بحسب الإيرادات',
    'LBL_LEADS' => 'مُهتمون',
    'LBL_CONTACTS' => 'جهات الإتصال',
    'LBL_ACCOUNTS' => 'الحسابات',
    'LBL_OPPORTUNITIES' => 'فرص بيع',
    'LBL_CREATED_USER' => 'تم إنشاء مستخدم',
    'LBL_MODIFIED_USER' => 'المستخدم المعدل',
    'LBL_LOG_ENTRIES' => 'عناصر السجل',
    'LBL_INVALID EMAIL_SUBPANEL_TITLE' => 'بريد إلكتروني غير صالح',
    'LBL_SEND ERROR_SUBPANEL_TITLE' => 'خطأ في الإرسال',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'الحسابات',
    'LBL_LEADS_SUBPANEL_TITLE' => 'مُهتمون',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'فرص بيع',

    'LBL_LEAD_FORM_WIZARD' => 'المساعد الآلي لنموذج العميل المحتمل',
    'LBL_CAMPAIGN_INFORMATION' => 'نظرة شاملة', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDIT_BUTTON' => 'تشغيل المساعد الآلي',
    'LBL_YEAR' => "سنة",
    'LBL_DAY' => "يوم",
    'LBL_EDIT_LAYOUT' => 'تحرير التخطيط' /*for 508 compliance fix*/,
    'LBL_INVALID' => 'خاطئ' /*for 508 compliance fix*/,
    'LBL_VALID' => 'صالح' /*for 508 compliance fix*/,
    'LBL_ALERT' => 'إنذاراتي' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'تشغيل المساعد الآلي' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'احذف' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'أزِل' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'عرض',
    'ERR_NO_OPTS_SAVED' => 'لم يتم حفظ المستويات المثالية في حساب البريد الإلكتروني الوارد الخاص بك.',
    'ERR_REVIEW_EMAIL_SETTINGS' => 'الرجاء مراجعة إعدادات البريد الإلكتروني الوارد.',
    'LBL_LEADS_DELETED_SINCE_CREATED' => 'تم حذف {0} من العملاء المحتملين الذين تم إنشاؤهم من خلال هذه الحملة منذ إنشائها.',
    'LBL_FROM_NAME_HELP' => 'هذا هو الاسم الذي سيراه المستلم',
    'LBL_FROM_ADDR_HELP' => 'سيكون هذا هو عنوان المرسل الذي سيراه المستلم',
    'LBL_REPLY_TO_NAME_HELP' => 'هذا هو الاسم الذي سيرد عليه المستلم الخاص بك',
    'LBL_REPLY_TO_ADDR_HELP' => 'هذا هو البريد الإلكتروني الذي سيرد عليه المستلمون',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'عرض حسابات البريد الإلكتروني الصادرة',
    'LBL_CREATE_EMAIL_TEMPLATE_BTN' => 'حفظ',
    'LBL_SAVE_EMAIL_TEMPLATE_BTN' => 'حفظ',
    'LBL_SEARCH_TARGET_LIST' => 'فرز قائمة المستهدفين',
    'LBL_INSERT_URL_REF' => 'أدخل مرجع رابط URL',
    'LBL_INSERT_TRACKER_URL' => 'أدخل رابط URL الخاص بالمتعقب:',
    'LBL_CREATE_TRACKER_BTN' => 'إنشاء متغقب',
    'LBL_INSERT_TRACKER_BTN' => 'أدخل المتعقب',
    'LBL_EDIT_TRACKER_BTN' => 'تعديل المتعقب',
    'LBL_CREATE_TRACKER_URL' => '-- إنشاء --',
    'LBL_INSERT' => 'إدراج',
    'LBL_INSERT_VARIABLE' => 'إدراج:',
    'LBL_INSERT_VARIABLE_BTN' => 'إدخال المتغير',
    'LBL_INSERT_VARIABLE_SUBJECT_BTN' => 'إدخال المتغير',
    'LBL_EMAIL_VARIABLES' => 'متغيرات البريد الإلكتروني',
    'LBL_SAVE' => 'حفظ',
    'ERR_REQUIRED_TRACKER_NAME' => 'اسم المتعقب إلزامي',
    'ERR_REQUIRED_TRACKER_URL' => 'رابط URL الخاص بالمتعقب إلزامي',
    'LBL_UPDATE_TEMPLATE' => 'تحديث القالب',
    'LBL_ATTACHMENTS' => 'المرفقات',
    'ERR_MISSING_REQUIRED_FIELDS' => 'حقل إلزامي مفقود',
    'LBL_SUITE_DOCUMENT' => 'وثيقة',
    'LBL_UPLOAD_FILE' => 'رفع الملف',
    'LBL_EMAIL_ATTACHMENT' => 'مرفق البريد الإلكتروني',
    'LBL_PROCESS_BOUNCED_EMAILS' => 'معالجة رسائل البريد الإلكتروني المرتدة',
    'LBL_PROCESS_CAMPAIGN_EMAILS' => 'معالجة رسائل البريد الإلكتروني للحملة',
    'LBL_SENDER_DETAILS' => 'تفاصيل المرسل',
    'LBL_CHOOSE_TEMPLATES' => 'اختر القوالب',
    'LBL_CHOOSE_TARGETS' => 'اختر الأهداف',
    'LBL_CAMPAIGN_DETAILS_AND_CONDITIONS' => 'تفاصيل وشروط الحملة',
    'LBL_OPEN_IN_NEW_WINDOW' => 'فتح في نافذة جديدة...',
    'LBL_CREATE_MARKETING_RECORD' => 'التالي',
    'LBL_NO_TEMPLATE_SELECTED' => 'لم يتم تحديد قالب البريد الإلكتروني',
    'LBL_SELECT_TEMPLATE' => 'قوالب',
    'LBL_WIZARD_ADD_TARGET' => 'إضافة قائمة مستهدفة موجودة:',
    'LBL_CLICK_TO_ADD' => 'انقر فوق قالب العنصر (العناصر) لإضافته.',
    'LBL_CANCEL' => 'إلغاء',
    'LBL_EMPTY_SUBJECT' => 'موضوع البريد الإلكتروني فارغ. هل أنت متأكد من رغبتك في المتابعة؟',
    'LBL_OVERWRITE_QUESTION' => 'هل أنت متأكد من رغبتك في تعديل قالب البريد الإلكتروني الموجود؟',
    'LBL_SELECT_EMAIL_TRACKER' => 'الرجاء تحديد متعقب البريد الإلكتروني.',
    'LBL_STEP_UNAVAILABLE' => 'للتقدم يرجى النقر على زر (التالي).',
    'LBL_STEP_INFO_CAMPAIGN_HEADER' => 'الرجاء إدخال اسم الحملة واختيار الحالة',
    'LBL_STEP_INFO_TARGET_LIST_NEWSLETTER' => 'تتطلب كل حملة قوائم مستهدفة للاشتراك، وإلغاء الاشتراك والاختبار. عندما لا يتم تحديد قائمة، سيتم إنشاء قائمة مستهدفة فارغة عند الحفظ.',
    'LBL_STEP_INFO_TARGET_LIST_NON_NEWSLETTER' => 'حدد قوائم الاستهداف لهذه الحملة.',
    'LBL_STEP_INFO_EMAIL_TEMPLATE' => 'الرجاء تحديد قالب بريد إلكتروني أو إنشاء قالب بريد إلكتروني جديد.',
    'LBL_STEP_INFO_MARKETING' => 'الرجاء اختيار حسابات البريد الإلكتروني.',
    'LBL_NO_SUBJECT' => 'قالب البريد الإلكتروني المحدد لا يحتوي على موضوع',
    'LBL_NO_HTML_BODY_CONTENTS' => 'قالب البريد الإلكتروني المحدد لا يحتوي على نص html',
    'LBL_NO_SELECTED_TEMPLATE' => 'لا يوجد قالب محدد!',
    'LBL_NO_BODY_CONTENTS' => 'قالب البريد الإلكتروني المحدد لا يحتوي على نص',
    'LBL_ERROR_ON_MARKETING' => 'حقول مطلوبة مفقودة',

    'LBL_NO_MARKETING_NAME' => 'اسم سجل التسويق فارغ',
    'LBL_NO_INBOUND_EMAIL_SELECTED' => 'لم يتم تحديد حساب البريد الإلكتروني الوارد الخاص بالتسويق',
    'LBL_NO_DATE_START' => 'سجل التسويق لا يحتوي على تاريخ بدء',
    'LBL_NO_FROM_NAME' => 'اسم المرسِل فارغ',
    'LBL_NO_FROM_ADDR_OR_INVALID' => 'عنوان المرسِل فارغ أو غير صالح',
    'LBL_NEWSLETTER_TITLE' => ' حملة النشرات الإخبارية هي نوع من حملات البريد الإلكتروني، تسمح لك بإرسال بريد إلكتروني إلى قائمة مستهدفة واحدة.',
    'LBL_EMAIL_TITLE' => 'حملة البريد الإلكتروني هي نوع من حملات البريد الإلكتروني، تسمح لك بإرسال بريد إلكتروني إلى قوائم مستهدفة متعددة.',
    'LBL_NON_EMAIL_TITLE' => 'حملة بدون بريد إلكتروني هي حملة لا ترسل رسالة بريد إلكتروني.',
    'LBL_TEMPLATE_SAVING' => 'الرجاء الانتظار، جاري حفظ القالب...',
    'LBL_TEMPLATE_SAVED' => 'تم حفظ القالب بنجاح.',
    'LBL_PLEASE_SELECT_OPTION' => 'الرجاء تحديد الخيار الذي تفضله',
    'LBL_OPTION_SELECT_TEMPLATE' => 'اختر قالب موجود',
    'LBL_OPTION_CREATE_TEMPLATE' => 'إنشاء قالب جديد',
    'LBL_OPTION_COPY_TEMPLATE' => 'نسخ قالب موجود',
    'LBL_SUMMARY' => 'ملخص',
    'LBL_CAMPAIGN_CHECKLIST' => 'قائمة التحقق للحملة',

    'LBL_EMAIL_MARKETING' => 'التسويق بالبريد الإلكتروني',
    'LBL_QUEUE_ITEMS' => 'عناصر قائمة الانتظار',
    'LBL_PROSPECT_LISTS' => 'قوائم العملاء المتوقعين',
    'LBL_SURVEYRESPONSES_CAMPAIGNS_FROM_SURVEYRESPONSES_TITLE' => 'الردود على الاستطلاع',
    'LBL_CAMPAIGN_SURVEY' => "الاستطلاع",
);
