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
    'LBL_EMAIL_INFORMATION' => 'البريد الإلكتروني',
    'LBL_FW' => 'تحويل:',
    'LBL_RE' => 'رد:',

    'LBL_BUTTON_CREATE' => 'إنشاء',
    'LBL_BUTTON_EDIT' => 'تحرير',
    'LBL_BUTTON_EDIT_EDIT_DRAFT' => 'تحرير المسودة',
    'LBL_QS_DISABLED' => '(البحث السريع غير متاح لهذه الوحدة. الرجاء استخدام زر التحديد.)',
    'LBL_SIGNATURE_PREPEND' => 'التوقيع أعلى الرد',
    'LBL_IMPORT' => 'استيراد',
    'LBL_LOADING' => 'يتم التحميل',
    'LBL_MARKING' => 'تسويقي',
    'LBL_DELETING' => 'يتم الحذف',

    'LBL_CONFIRM_DELETE_EMAIL' => 'هل أنت متأكد من أنك تريد حذف هذا البريد الإلكتروني؟',
    'LBL_ENTER_FOLDER_NAME' => 'الرجاء إدخال اسم المجلد',

    'LBL_ERROR_SELECT_MODULE' => 'الرجاء تحديد وحدة للحقل مرتبط بـ',

    'ERR_ARCHIVE_EMAIL' => 'خطأ: حدد رسائل البريد الإلكتروني لأرشفتها.',
    'ERR_DELETE_RECORD' => 'خطأ: يجب تحديد رقم السجل لحذف الحساب.',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'الحسابات',
    'LBL_ADD_DASHLETS' => 'إضافة تطبيق جديد',
    'LBL_ADD_DOCUMENT' => 'إضافة وثائق',
    'LBL_ADD_ENTRIES' => 'إضافة مدخلات',
    'LBL_ADD_FILE' => 'إضافة ملفات',
    'LBL_ATTACHMENTS' => 'المرفقات:',
    'LBL_ATTACH_FILES' => 'إرفاق ملفات',
    'LBL_ATTACH_DOCUMENTS' => 'إرفاق مستندات',
    'LBL_HAS_ATTACHMENT' => 'يحتوي على مرفقات؟:',
    'LBL_BCC' => 'نسخة نخفية إلى:',
    'LBL_BODY' => 'النص:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'أخطاء',
    'LBL_CC' => 'نسخة إلى :',
    'LBL_COMPOSE_MODULE_NAME' => 'إنشاء رسالة',
    'LBL_CONTACT_NAME' => 'جهة إتصال:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'جهات الإتصال',
    'LBL_CREATED_BY' => 'أنشئ بواسطة',
    'LBL_DATE_SENT_RECEIVED' => 'تاريخ الإرسال/الاستلام:',
    'LBL_DATE' => 'تاريخ الإرسال:',
    'LBL_DELETE_FROM_SERVER' => 'حذف الرسالة من الخادم',
    'LBL_DESCRIPTION' => 'الوصف',
    'LBL_EDIT_ALT_TEXT' => 'تحرير نص عادي',
    'LBL_SEND_IN_PLAIN_TEXT' => 'إرسال نص عادي',
    'LBL_SEND_CONFIRM_OPT_IN' => 'إرسال رسالة خيار الاشتراك',
    'LBL_EMAIL_ATTACHMENT' => 'مرفق البريد الإلكتروني',
    'LBL_EMAIL_SELECTOR_SELECT' => 'حدد',
    'LBL_EMAIL_SELECTOR_CLEAR' => 'مسح',
    'LBL_EMAIL' => 'عنوان البريد الإلكتروني:',
    'LBL_EMAILS_ACCOUNTS_REL' => 'بريدإلكتروني:حسابات',
    'LBL_EMAILS_BUGS_REL' => 'بريد إلكتروني:أخطاء برمجية',
    'LBL_EMAILS_CASES_REL' => 'البريد الإلكتروني:القضايا',
    'LBL_EMAILS_CONTACTS_REL' => 'بريدإلكتروني:جهات اتصال',
    'LBL_EMAILS_LEADS_REL' => 'بريدإلكتروني:عملاء محتملون',
    'LBL_EMAILS_OPPORTUNITIES_REL' => 'بريدإلكتروني:فرص',
    'LBL_EMAILS_NOTES_REL' => 'بريدإلكتروني:ملاحظات',
    'LBL_EMAILS_PROJECT_REL' => 'بريدإلكتروني:مشاريع',
    'LBL_EMAILS_PROJECT_TASK_REL' => 'رسائل البريد الإلكتروني: مهمة مشروع',
    'LBL_EMAILS_PROSPECT_REL' => 'بريدإلكتروني:عملاء متوقعون',
    'LBL_EMAILS_CONTRACTS_REL' => 'بريدإلكتروني:عقود',
    'LBL_EMAILS_TASKS_REL' => 'رسائل البريد الإلكتروني: المهام',
    'LBL_EMAILS_USERS_REL' => 'بريدإلكتروني:مستخدمون',
    'LBL_EMPTY_FOLDER' => 'لا توجد رسائل بريد إلكتروني للعرض',
    'LBL_SELECT_FOLDER' => 'اختر مجلدا',
    'LBL_ERROR_SENDING_EMAIL' => 'خطأ عند إرسال البريد الإلكتروني',
    'LBL_ERROR_SAVING_DRAFT' => 'خطأ عند حفظ المسودة',
    'LBL_FROM_NAME' => 'من إسم',
    'LBL_FROM' => 'المرسل:',
    'LBL_REPLY_TO' => 'إرسال الرد إلى:',
    'LBL_HTML_BODY' => 'نص HTML',
    'LBL_INVITEE' => 'المستلمون',
    'LBL_LEADS_SUBPANEL_TITLE' => 'مُهتمون',
    'LBL_MESSAGE_SENT' => 'تم إرسال الرسالة',
    'LBL_MODIFIED_BY' => 'عُدل بواسطة',
    'LBL_MODULE_NAME' => 'جميع الرسائل',
    'LBL_MODULE_TITLE' => 'رسائل البريد الالكتروني:',
    'LBL_MY_EMAILS' => 'رسائل بريد الكتروني',
    'LBL_NEW_FORM_TITLE' => 'أرشفة الرسائل',
    'LBL_NONE' => '--لا شيء--',
    'LBL_NOT_SENT' => 'خطأ في الإرسال',
    'LBL_NOTES_SUBPANEL_TITLE' => 'المرفقات',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'فرص بيع',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'مشاريع',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'مهام المشروع',
    'LBL_RAW' => 'النص الخام للبريد الإلكتروني',
    'LBL_SAVE_AS_DRAFT_BUTTON_TITLE' => 'حفظ مُسودة',
    'LBL_DISREGARD_DRAFT_BUTTON_TITLE' => 'عدم حفظ المسودة',
    'LBL_SEARCH_FORM_TITLE' => 'بحث رسائل البريد الإلكتروني',
    'LBL_SEND_ANYWAYS' => 'هذا البريد الإلكتروني لا يحتوي موضوعًا. إرسال/حفظ على أي حال؟',
    'LBL_SEND_BUTTON_LABEL' => 'أرسل',
    'LBL_SEND_BUTTON_TITLE' => 'أرسل',
    'LBL_SEND' => 'إرسال',
    'LBL_SENT_MODULE_NAME' => 'البريد المرسل',
    'LBL_SHOW_ALT_TEXT' => 'عرض النص العادي',
    'LBL_SIGNATURE' => 'التوقيع',
    'LBL_SUBJECT' => 'الموضوع:',
    'LBL_TEXT_BODY' => 'نص الرسالة',
    'LBL_TIME' => 'وقت الإرسال:',
    'LBL_TO_ADDRS' => 'إلى',
    'LBL_USERS_SUBPANEL_TITLE' => 'المستخدمين',
    'LBL_USERS' => 'المستخدمين',

    'LNK_CALL_LIST' => 'مكالمات',
    'LBL_EMAIL_RELATE' => 'يتعلق بـ',
    'LNK_EMAIL_TEMPLATE_LIST' => 'عرض قوالب البريد الإلكتروني',
    'LNK_MEETING_LIST' => 'اجتماعات',
    'LNK_NEW_CALL' => 'سجل المكالمة',
    'LNK_NEW_EMAIL_TEMPLATE' => 'إنشاء قالب بريد إلكتروني',
    'LNK_NEW_EMAIL' => 'إرسال البريد',
    'LNK_NEW_MEETING' => 'جدولة اجتماع',
    'LNK_NEW_NOTE' => 'إنشاء ملاحظة أو ملف مرفق',
    'LNK_NEW_SEND_EMAIL' => 'أنشئ',
    'LNK_NEW_TASK' => 'إنشاء مهمة',
    'LNK_NOTE_LIST' => 'ملاحظات',
    'LNK_SENT_EMAIL_LIST' => 'البريد المرسل',
    'LNK_TASK_LIST' => 'مهام',
    'LNK_VIEW_CALENDAR' => 'اليوم',

    'LBL_LIST_ASSIGNED' => 'اُسندت',
    'LBL_LIST_CONTACT_NAME' => 'اسم جهة الإتصال',
    'LBL_LIST_DATE' => 'تاريخ الإرسال',
    'LBL_LIST_DATE_SENT_RECEIVED' => 'تاريخ الإرسال/الإستلام',
    'LBL_LIST_FORM_DRAFTS_TITLE' => 'مُسودة',
    'LBL_LIST_FORM_SENT_TITLE' => 'البريد المرسل',
    'LBL_LIST_FORM_TITLE' => 'قائمة رسائل البريد الإلكتروني',
    'LBL_LIST_FROM_ADDR' => 'من',
    'LBL_LIST_RELATED_TO' => 'نوع المستلم',
    'LBL_LIST_SUBJECT' => 'الموضوع',
    'LBL_LIST_TO_ADDR' => 'إلى',
    'LBL_LIST_TYPE' => 'نوع',

    'WARNING_SETTINGS_NOT_CONF' => 'تحذير: لم يتم تهيئة إعدادات البريد الإلكتروني لإرسال البريد الإلكتروني.',

    // for All emails
    'LBL_BUTTON_RAW_LABEL' => 'عرض النص الخام',
    'LBL_BUTTON_RAW_LABEL_HIDE' => 'إخفاء السطر',

    // for InboundEmail
    'LBL_BUTTON_CHECK' => 'تحقق من حركة البريد',
    'LBL_BUTTON_CHECK_TITLE' => 'التحقق من وجود بريد إلكتروني جديد',
    'LBL_BUTTON_FORWARD' => 'تمرير',
    'LBL_BUTTON_REPLY_TITLE' => 'الردّ',
    'LBL_BUTTON_REPLY_ALL' => 'الردّ على الكل',
    'LBL_BUTTON_DELETE_IMAP' => 'حذف من خادم IMAP',
    'LBL_CASES_SUBPANEL_TITLE' => 'القضايا',
    'LBL_INBOUND_TITLE' => 'عنوان إيميل سجل من الإنترنت',
    'LBL_INTENT' => 'الغرض',
    'LBL_MESSAGE_ID' => 'معرف الرسالة',
    'LBL_REPLY_HEADER_1' => 'على',
    'LBL_REPLY_HEADER_2' => 'كتب:',
    'LBL_REPLY_TO_ADDRESS' => 'عنوان إرسال الرد',
    'LBL_REPLY_TO_NAME' => 'اسم إرسال الرد',

    'LBL_LIST_BUG' => 'أخطاء',
    'LBL_LIST_CASE' => 'القضايا',
    'LBL_LIST_CONTACT' => 'جهات الإتصال',
    'LBL_LIST_LEAD' => 'مُهتمون',
    'LBL_LIST_TASK' => 'مهام',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'المستخدم المكلف',

    // for Inbox
    'LBL_ALL' => 'حدد الكل',
    'LBL_ASSIGN_WARN' => 'تأكد من تحديد جميع الخيارات.',
    'LBL_BACK_TO_GROUP' => 'رجوع إلى البريد الوارد للمجموعة',
    'LBL_BUTTON_DISTRIBUTE_TITLE' => 'تعيين',
    'LBL_BUTTON_DISTRIBUTE' => 'تعيين',
    'LBL_BUTTON_GRAB_TITLE' => 'خذ من المجموعة',
    'LBL_BUTTON_GRAB' => 'خذ من المجموعة',
    'LBL_CREATE_BUG' => 'إنشاء خطأ',
    'LBL_CREATE_CASE' => 'إنشاء قضية',
    'LBL_CREATE_CONTACT' => 'إنشاء جهة إتصال',
    'LBL_CREATE_LEAD' => 'إنشاء مهتم بنا',
    'LBL_CREATE_TASK' => 'إنشاء مهمة',
    'LBL_DIST_TITLE' => 'تكليف بالبريد',
    'LBL_LOCK_FAIL_DESC' => 'العنصر المختار غير متوفر حاليا.',
    'LBL_LOCK_FAIL_USER' => ' أسندت إليه المسؤولية.',
    'LBL_MASS_DELETE_ERROR' => 'لم يتم تمرير أي عناصر محددة للحذف.',
    'LBL_NEW' => 'جديد',
    'LBL_NEXT_EMAIL' => 'العنصر المتاح التالي',
    'LBL_REPLIED' => 'تم الرد عليه',
    'LBL_TO' => 'إلى:',
    'LBL_TOGGLE_ALL' => 'تبديل الكل',
    'LBL_UNKNOWN' => 'مجهول',
    'LBL_USE' => 'إسناد:',
    'LBL_ASSIGN_SELECTED_RESULTS_TO' => 'إسناد النتائج المحددة إلى:',
    'LBL_USER_SELECT' => 'اختر المستخدمين',
    'LBL_USING_RULES' => 'القواعد المستخدمة:',
    'LBL_WARN_NO_DIST' => 'لم يتم تحديد طريقة التوزيع',
    'LBL_WARN_NO_USERS' => 'لم يتم تحديد مستخدمين',
    'LBL_IMPORT_STATUS_TITLE' => 'الحالة',
    'LBL_INDICATOR' => 'المؤشر',
    'LBL_LIST_STATUS' => 'الحالة',
    'LBL_LIST_TITLE_GROUP_INBOX' => 'صندوق الوارد للمجموعة',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'المسودات',
    'LBL_LIST_TITLE_MY_INBOX' => 'صندوق الوارد',
    'LBL_LIST_TITLE_MY_SENT' => 'البريد المرسل',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'الرسائل المؤرشفة',

    'LNK_MY_DRAFTS' => 'المسودات',
    'LNK_MY_INBOX' => 'رسائل بريد الكتروني',
    'LNK_VIEW_MY_INBOX' => 'عرض البريد الإلكتروني',
    'LNK_QUICK_REPLY' => 'الردّ',
    'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' => 'لم يتم تحديد فريق أساسي',
    'LBL_INSERT_CONTACT_EMAIL' => 'إدراج عنوان البريد الإلكتروني من جهة الاتصال',
    'LBL_INSERT_ACCOUNT_EMAIL' => 'إدراج عنوان البريد الإلكتروني من حساب',
    'LBL_INSERT_TARGET_EMAIL' => 'إدراج عنوان البريد الإلكتروني من مستهدف',
    'LBL_INSERT_USER_EMAIL' => 'إدراج عنوان البريد الإلكتروني من مستخدم',
    'LBL_INSERT_LEAD_EMAIL' => 'إدراج عنوان البريد الإلكتروني من عميل محتمل',
    'LBL_INSERT_ERROR_BLANK_EMAIL' => 'عنوان البريد الإلكتروني غير صالح',

    // advanced search
    'LBL_ASSIGNED_TO' => 'أُسند إلى:',
    'LBL_MEMBER_OF' => 'الأصل',
    'LBL_QUICK_CREATE' => 'إنشاء سريع',
    'LBL_CREATE' => 'أنشئ',
    'LBL_STATUS' => 'حالة البريد الإلكتروني:',
    'LBL_EMAIL_FLAGGED' => 'عليه علامة:',
    'LBL_EMAIL_REPLY_TO_STATUS' => 'حالة الرد على:',
    'LBL_TYPE' => 'النوع:',
    //#20680 EmialTemplate Ext.Message.show;
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => 'يرجى التحقق!',
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => 'سيؤدي تحديد هذا القالب إلى الكتابة فوق أي بيانات تم إدخالها بالفعل في نص البريد الإلكتروني. هل ترغب في الاستمرار؟',
    'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => 'اختيار "--بدون--" سيمسح أي بيانات تم إدخالها بالفعل داخل نص البريد الإلكتروني. هل ترغب في الاستمرار؟',
    'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => 'تحذير',
    'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => 'قد يؤدي استخدام قالب بريد إلكتروني يحتوي على معطيات جهات الاتصال، مثل اسم جهة الاتصال، لإرسال رسائل بريد إلكتروني إلى عدة مستلمين، إلى نتائج غير متوقعة. من المستحسن أن تستخدم حملة بريد إلكتروني للرسائل الجماعية.',
    'LBL_CHECK_ATTACHMENTS' => 'يرجى التحقق من المرفقات!',
    'LBL_HAS_ATTACHMENTS' => 'هذا البريد الإلكتروني يحتوي بالفعل على مرفقات. هل ترغب في الاحتفاظ بالمرفقات؟',
    'LBL_HAS_ATTACHMENT_INDICATOR' => 'تحتوي المرفقات',
    'ERR_MISSING_REQUIRED_FIELDS' => 'حقل إلزامي مفقود',
    'ERR_INVALID_REQUIRED_FIELDS' => 'حقل إلزامي غير صالح',
    'LBL_FILTER_BY_RELATED_BEAN' => 'اعرض فقط المستلمين المرتبطين بـ',
    'LBL_ADD_INBOUND_ACCOUNT' => 'إضافة',
    'LBL_ADD_OUTBOUND_ACCOUNT' => 'إضافة',
    'LBL_EMAIL_ACCOUNTS_INBOUND' => 'خصائص حساب البريد',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => 'خادم بريد SMTP للبريد الصادر',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => 'خوادم بريد SMTP الصادرة',
    'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'حسابات البريد الإلكتروني',
    'LBL_EMAIL_SETTINGS_INBOUND' => 'البريد الإلكتروني الوارد',
    'LBL_EMAIL_SETTINGS_OUTBOUND' => 'البريد الإلكتروني الصادر',
    'LBL_ADD_CC' => 'أضف نسخة إلى',
    'LBL_ADD_BCC' => 'أضف نسخة مخفية إلى',
    'LBL_MOVE_TO_BCC' => 'نقل إلى نسخة مخفية إلى',
    'LBL_ADD_TO_ADDR' => 'اضف مستلم',
    'LBL_SELECTED_ADDR' => 'مختار',
    'LBL_ADD_CC_BCC_SEP' => '|',
    'LBL_SEND_EMAIL_FAIL_TITLE' => 'خطأ عند إرسال البريد الإلكتروني',
    'LBL_EMAIL_DETAIL_VIEW_SHOW' => 'عرض',
    'LBL_EMAIL_DETAIL_VIEW_MORE' => ' المزيد',
    'LBL_MORE_OPTIONS' => 'المزيد',
    'LBL_LESS_OPTIONS' => 'أقل',
    'LBL_MAILBOX_TYPE_PERSONAL' => 'شخصي',
    'LBL_MAILBOX_TYPE_GROUP' => 'مجموعة',
    'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'مجموعة - استيراد تلقائي',
    'LBL_SEARCH_FOR' => 'البحث عن',
    'LBL_EMAIL_INBOUND_TYPE_HELP' => '<b>شخصي</b>: حساب البريد الإلكتروني الذي يمكنك الوصول إليه. أنت فقط من يمكنه إدارة واستيراد رسائل البريد الإلكتروني من هذا الحساب.<br><b>مجموعة</b>: يمكن الوصول إلى حساب البريد الإلكتروني من قبل أعضاء الفرق المحددة. يمكن لأعضاء الفريق إدارة واستيراد رسائل البريد الإلكتروني من هذا الحساب.<br><b>مجموعة - استيراد تلقائي</b>: يمكن الوصول إلى حساب البريد الإلكتروني من قبل أعضاء الفرق المحددة. يتم استيراد رسائل البريد الإلكتروني تلقائيًا كسجلات.',
    'LBL_ADDRESS_BOOK_SEARCH_HELP' => 'أدخل عنوان بريد إلكتروني أو الاسم الأول أو اسم العائلة أو اسم الحساب للعثور على المستلمين.',
    'LBL_TEST_SETTINGS' => 'اختبار الإعدادات',
    'LBL_EMPTY_EMAIL_BODY' => '<p><span style="color: #888888;"><em>هذه الرسالة لا تتضمن أي محتوى</em></span></p>',
    'LBL_HAS_EMPTY_EMAIL_SUBJECT' => 'يرجى تحديد الموضوع',
    'LBL_HAS_EMPTY_EMAIL_BODY' => 'الرجاء تحديد رسالتك في نص الرسالة',
    'LBL_HAS_INVALID_EMAIL_CC' => 'العنوان (العناوين) في حقل نسخة إلى غير صالح',
    'LBL_HAS_INVALID_EMAIL_BCC' => 'العنوان (العناوين) في حقل نسخة مخفية غير صالح',
    'LBL_HAS_INVALID_EMAIL_TO' => 'العنوان (العناوين) في حقل إلى غير صالح',
    'LBL_TEST_EMAIL_SUBJECT' => 'رسالة بريد إلكتروني تجريبية من نظام SuiteCRM',
    'LBL_NO_SUBJECT' => '(لا يوجد موضوع)',
    'LBL_CHECKING_ACCOUNT' => 'التحقق من الحساب',
    'LBL_OF' => 'الخاص ب',
    'LBL_TEST_EMAIL_BODY' => 'تم إرسال هذا البريد الإلكتروني لاختبار معلومات خادم البريد الصادر المتوفرة في نظام SuiteCRM. يشير الاستلام الناجح لهذا البريد الإلكتروني إلى أن معلومات خادم البريد الصادر المقدمة سليمة.',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'لم يقم المُشرف بتهيئة حساب الرسائل الصادرة بعد. النظام غير قادر على إرسال رسائل تجريبية.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'هل أستخدم نظام المصادقة الخاص بـ SMTP؟',
    'LBL_MAIL_SMTPPASS' => 'كلمة مرور SMTP:',
    'LBL_MAIL_SMTPPORT' => 'منفذ SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'خادم SMTP:',
    'LBL_MAIL_SMTPUSER' => 'اسم المستخدم SMTP:',
    'LBL_MAIL_SMTP_SETTINGS' => 'مواصفات خادم SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'اختر مزود البريد الإلكتروني الخاص بك:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'كلمة السر لبريد ياهو:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'معرف بريد ياهو:',
    'LBL_GMAIL_SMTPPASS' => 'كلمة مرور Gmail:',
    'LBL_GMAIL_SMTPUSER' => 'عنوان بريد Gmail الإلكتروني:',
    'LBL_EXCHANGE_SMTPPASS' => 'كلمة مرورExchange:',
    'LBL_EXCHANGE_SMTPUSER' => 'اسم المستخدم لـ Exchange:',
    'LBL_EXCHANGE_SMTPPORT' => 'منفذ خادم Exchange:',
    'LBL_EXCHANGE_SMTPSERVER' => 'خادم Exchange:',

    'LBL_EDIT_LAYOUT' => 'تحرير التخطيط' /*for 508 compliance fix*/,
    'LBL_ATTACHMENT' => 'المرفق' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'احذف' /*for 508 compliance fix*/,
    'LBL_CREATE_CASES' => 'إنشاء قضايا' /*for 508 compliance fix*/,
    'LBL_CREATE_LEADS' => 'إنشاء عملاء محتملون' /*for 508 compliance fix*/,
    'LBL_CREATE_CONTACTS' => 'إنشاء جهات اتصال' /*for 508 compliance fix*/,
    'LBL_CREATE_BUGS' => 'إنشاء أخطاء برمجية' /*for 508 compliance fix*/,
    'LBL_CREATE_TASKS' => 'إنشاء المهام' /*for 508 compliance fix*/,
    'LBL_CHECK_INLINE' => 'تصحيح' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'إغلاق' /*for 508 compliance fix*/,
    'LBL_HELP' => 'مساعدة' /*for 508 compliance fix*/,
    'LBL_WAIT' => 'انتظار' /*for 508 compliance fix*/,
    'LBL_CHECKEMAIL' => 'التحقق من البريد' /*for 508 compliance fix*/,
    'LBL_COMPOSEEMAIL' => 'إنشاء رسالة' /*for 508 compliance fix*/,
    'LBL_EMAILSETTINGS' => 'إعدادات البريد الإلكتروني' /*for 508 compliance fix*/,

    // SNIP
    'LBL_EMAILS_MEETINGS_REL' => 'البريد الإلكتروني: الاجتماعات',
    'LBL_DATE_MODIFIED' => 'تاريخ التعديل',

    'LBL_CATEGORY' => 'الفئة',
    'LBL_LIST_CATEGORY' => 'الفئة',
    'LBL_EMAIL_TEMPLATE' => 'قالب البريد الإلكتروني',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'تجاهل المسودة',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'هذه العملية ستؤدي إلى حذف هذا االرسالة، هل تريد المتابعة؟',
    'LBL_EMAIL_DRAFT_DELETED' => 'تم حذف المسودة',
    'LBL_EMAIL_DRAFT_ERROR_DELETING' => 'حدث خطأ أثناء محاولة حذف المسودة.',

    'LBL_QUICK_CREATE_SUCCESS1' => 'تم إنشاء السجل بنجاح.',
    'LBL_QUICK_CREATE_SUCCESS2' => 'انقر موافق لعرض السجل الجديد.',
    'LBL_QUICK_CREATE_SUCCESS3' => 'انقر إلغاء للعودة إلى البريد الإلكتروني.',

    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'تطبيق قالب بريد الكتروني',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'هذا العملية ستؤدي إلى تجاوز نص و حقل الموضوع في الرسالة، هل تريد المتابعة؟',

    'LBL_MAILBOX_ID' => 'معرف صندوق البريد',
    'LBL_PARENT_ID' => 'مُعرف الأساس',
    'LBL_LAST_SYNCED' => 'آخر مزامنة',
    'LBL_ORPHANED' => 'معلق',
    'LBL_IMAP_KEYWORDS' => 'الكلمات الرئيسية لخادم IMAP',
    'LBL_ERROR_NO_FOLDERS' => 'خطأ: لا توجد مجلدات متاحة. الرجاء التحقق من إعدادات البريد الإلكتروني الخاص بك.',
    'LBL_ORIGINAL_MESSAGE_SEPARATOR' => '---',


    'LBL_MARK_UNREAD' => 'وضع علامة كغير مقروء',
    'LBL_MARK_READ' => 'وضع علامة كمقروء',
    'LBL_MARK_FLAGGED' => 'وضع علامة كمعلّم',
    'LBL_MARK_UNFLAGGED' => 'وضع علامة كغير معلّم',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'تم إرسال رسالة اختيار الاشتراك',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'فشل إرسال رسالة اختيار الاشتراك',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'تأكيد رمز الاشتراك',

    'ERR_NO_RETURN_ID' => 'لم يتم العثور على المرفق.',

    'LBL_LIST_DATE_MODIFIED' => 'آخر تعديل',
    'LNK_IMPORT_CAMPAIGNS' => 'استيراد الحملة',
    
    // Email Validation Error messages. Typicaly for Email Validation:
    'ERR_FIELD_FROM_IS_NOT_SET' => 'لم يتم تعيين حقل المرسل.',
    'ERR_FIELD_FROM_IS_EMPTY' => 'حقل المرسل فارغ.',
    'ERR_FIELD_FROM_IS_INVALID' => 'حقل المرسل غير صالح.',
    'ERR_FIELD_FROM_ADDR_IS_NOT_SET' => 'لم يتم تعيين عنوان المرسل.',
    'ERR_FIELD_FROM_ADDR_IS_EMPTY' => 'عنوان المرسل فارغ.',
    'ERR_FIELD_FROM_ADDR_IS_INVALID' => 'عنوان المرسل غير صالح.',
    'ERR_FIELD_FROMNAME_IS_NOT_SET' => 'لم يتم تعيين اسم المرسل.',
    'ERR_FIELD_FROMNAME_IS_EMPTY' => 'اسم المرسل فارغ.',
    'ERR_FIELD_FROMNAME_IS_INVALID' => 'اسم المرسل غير صالح.',
    'ERR_FIELD_FROM_NAME_IS_NOT_SET' => 'لم يتم تعيين اسم المرسل.',
    'ERR_FIELD_FROM_NAME_IS_EMPTY' => 'اسم المرسل فارغ.',
    'ERR_FIELD_FROM_NAME_IS_INVALID' => 'اسم المرسل غير صالح.',
    'ERR_FIELD_FROM_ADDR_NAME_IS_NOT_SET' => 'لم يتم تعيين عنوان واسم المرسل المزدوج.',
    'ERR_FIELD_FROM_ADDR_NAME_IS_EMPTY' => 'عنوان واسم المرسل المزدوج فارغ.',
    'ERR_FIELD_FROM_ADDR_NAME_IS_INVALID' => 'عنوان واسم المرسل المزدوج غير صالح.',
    'ERR_FIELD_FROM_ADDR_NAME_DOESNT_MATCH_REGEX' => 'تنسيق العنوان والاسم المزدوج غير صحيح، استخدم تنسيق "from@emailaddress.org <اسم الشخص>".',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_NAME_PART' => 'جزء الاسم غير صالح من عنوان واسم المرسل المزدوج.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART' => 'جزء عنوان البريد الإلكتروني غير صالح من عنوان واسم المرسل المزدوج.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROM' => 'عنوان واسم المرسل المزدوج لا يتطابق مع اسم أو عنوان البريد الإلكتروني للمرسل.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROM_ADDR' => 'عنوان واسم المرسل المزدوج لا يتطابق مع عنوان المرسل.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROMNAME' => 'ثنائي عنوان واسم المرسل لا يتطابق مع اسم المرسل.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROM_NAME' => 'ثنائي عنوان واسم المرسل لا يتطابق مع اسم المرسل.',
);