<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\ApptModel
 *
 * @property int $id
 * @property int $Client_id
 * @property string $Name
 * @property string $Phone_number
 * @property string $Email
 * @property string $Appt_date
 * @property string $Appt_time
 * @property string $Mode_of_consultation
 * @property string $Therapist
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ApptModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApptModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApptModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|ApptModel userr()
 * @method static \Illuminate\Database\Eloquent\Builder|ApptModel whereApptDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApptModel whereApptTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApptModel whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApptModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApptModel whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApptModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApptModel whereModeOfConsultation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApptModel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApptModel wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApptModel whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApptModel whereTherapist($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApptModel whereUpdatedAt($value)
 */
	class ApptModel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CalendarEvents
 *
 * @property int $id
 * @property string $event_name
 * @property string $event_start
 * @property string $event_end
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvents newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvents newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvents query()
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvents whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvents whereEventEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvents whereEventName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvents whereEventStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvents whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvents whereUpdatedAt($value)
 */
	class CalendarEvents extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Contact
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $subject
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUpdatedAt($value)
 */
	class Contact extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\JournalView
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $User_name
 * @property string $JournalDate
 * @property string $message
 * @property string|null $remember_token
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|JournalView newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JournalView newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JournalView query()
 * @method static \Illuminate\Database\Eloquent\Builder|JournalView userr()
 * @method static \Illuminate\Database\Eloquent\Builder|JournalView whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JournalView whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JournalView whereJournalDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JournalView whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JournalView whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JournalView whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JournalView whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JournalView whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JournalView whereUserName($value)
 */
	class JournalView extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Task
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string $task_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Task newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Task newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Task query()
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTaskDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereUpdatedAt($value)
 */
	class Task extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property int $is_admin 0=user, 1=admin, 2=therapist
 * @property string $name
 * @property string|null $phonenumber
 * @property string $email
 * @property string|null $address
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User userr()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhonenumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

