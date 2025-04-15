<?php

namespace Framework;
/**
 * SqlQuery.php
 * PHP web application to demonstrate how databases are accessed securely
 *
 *This class groups together all the SQL queries that are used within the application
 *
 * @author Original author: CF Ingrams - cfi@dmu.ac.uk
 * @author Rob Singleton - rob.singleton@protonmail.com
 * @copyright De Montfort University
 *
 * @package cryptoshow
 */
class SqlQuery
{

    public function __construct()
    {
    }

    public function __destruct()
    {
    }

    public static function queryGetEventNames(): string // HS
    {
        $sql_query_string = 'SELECT event_name';
        $sql_query_string .= ' FROM event';
        return $sql_query_string;
    }

    public static function queryGetEvents(): string // HS
    {
        $sql_query_string = 'SELECT event_name, event_date, event_venue, event_id';
        $sql_query_string .= ' FROM event';
        return $sql_query_string;
    }

    public static function queryGetUpcomingEvents(): string // HS -- updated by RS
    {
        $sql_query_string = 'SELECT event_name, event_date, event_venue, event_id';
        $sql_query_string .= ' FROM event WHERE event_date > curdate()';
        return $sql_query_string;
    }

    public static function queryCreateEvent(): string // HS
    {
        $sql_query_string = 'INSERT INTO event (event_name, event_date, event_venue)';
        $sql_query_string .= ' VALUES (:event_name, :event_date, :event_venue)';
        return $sql_query_string;
    }

    public static function queryDeleteEvent() //HS
    {
        $sql_query_string = 'DELETE FROM event WHERE event_name = :event_name';
        return $sql_query_string;
    }

    /* RS: queries for EventSignupComplete, MemberProfile and LoginSubmit */
    public static function queryGetMemberDetails(): string // JP -- updated by RS
    {
        $sql_query_string = 'SELECT * FROM registered_user WHERE user_nickname=:user';
        return $sql_query_string;
    }

    public static function queryGetEventDetails(): string // RS
    {
        $sql_query_string = 'SELECT * FROM event WHERE event_name=:event';
        return $sql_query_string;
    }

    public static function queryAddMemberToEvent(): string // RS
    {
        $sql_query_string = 'INSERT INTO user_event VALUES (:user, :event)';
        return $sql_query_string;
    }

    public static function queryGetUserDeviceInfo()
    {
        $query = 'SELECT * FROM crypto_device WHERE fk_user_id = :user_id AND crypto_device_record_visible = 1';
        return $query;

    }

    public static function queryGetUserDeviceNotV()
    {
        $query = 'SELECT * FROM crypto_device WHERE fk_user_id = :user_id AND crypto_device_record_visible = 0';
        return $query;

    }


    public static function queryGetUserIDFromNickname() // JP -- updated by RS -- use with sessions, sessions stores nickname not name.
    {
        $query = ' SELECT user_id FROM registered_user WHERE user_nickname=:user';
        return $query;

    }

    public static function queryAddDevice()
    {
        $query = 'INSERT INTO crypto_device (fk_user_id,crypto_device_name,
                           crypto_device_image_name,
                           crypto_device_record_visible,
                           crypto_device_registered_timestamp)
                    VALUES (:user_id,:device_name,:device_image_name,:record_visible,:timestamp)';
        return $query;
    }

    public static function queryRemoveDevice()
    {
        $query = 'DELETE  FROM crypto_Device WHERE crypto_device_name = :device_name AND fk_user_id = :user_id';
        return $query;
    }

    public static function querychangeDeviceName()
    {
        $query = 'UPDATE crypto_device
                    SET crypto_device_name = :device_name_to_change,
                        crypto_device_image_name = :device_image_name,
                        crypto_device_record_visible = :record_visible 
                        WHERE crypto_device_name = :device_name AND fk_user_id = :user';
        return $query;
    }

    /** JP -- updated by RS
     * Does not submit user_id or user_admin, they are predetermined by the SQL structure:
     * user_id -- auto increments from last.
     * user_admin -- defaults to 0, as in normal user status.
     */
    public static function registerMember(): string
    {
        $sql_query_string = 'INSERT INTO registered_user (user_nickname, user_name, user_email, user_hashed_password, user_device_count, user_registered_timestamp) VALUES';
        $sql_query_string .= '(:nickname, :username, :email, :password, 0, current_timestamp())';
        return $sql_query_string;
    }

    public static function queryRetrievePassword(): string // RS
    {
        $sql_query_string = 'SELECT user_hashed_password FROM registered_user WHERE user_nickname=:user';
        return $sql_query_string;
    }

    public static function queryGetAdministratorStatus(): string // RS
    {
        $sql_query_string = 'SELECT user_admin FROM registered_user WHERE user_nickname=:user';
        return $sql_query_string;
    }

    public static function queryUpdateUserProfile(): string // RS
    {
        $sql_query_string = 'UPDATE `registered_user` SET `user_name` = :realname,';
        $sql_query_string .= ' `user_email` = :email, `user_hashed_password` = :pwd';
        $sql_query_string .= ' WHERE `registered_user`.`user_nickname` = :username';
        return $sql_query_string;
    }

    public static function queryGetMemberNames(): string // RS - adapted from HS
    {
        $sql_query_string = 'SELECT user_nickname';
        $sql_query_string .= ' FROM registered_user';
        return $sql_query_string;
    }

}
