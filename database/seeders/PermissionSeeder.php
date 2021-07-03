<?php

namespace Database\Seeders;

use App\Models\Auth\Permission;

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /** User Management */
        Permission::insert(['module_id' => '1', 'name' => 'View Users','slug'=>'users.index', 'status' => 1]);
        Permission::insert(['module_id' => '1', 'name' => 'Show User','slug'=>'users.show', 'status' => 1]);
        Permission::insert(['module_id' => '1', 'name' => 'Add User','slug'=>'users.create', 'status' => 1]);
        Permission::insert(['module_id' => '1', 'name' => 'Edit User','slug'=>'users.edit', 'status' => 1]);
        Permission::insert(['module_id' => '1', 'name' => 'delete User','slug'=>'users.destroy', 'status' => 1]);

        Permission::insert(['module_id' => '1', 'name' => 'View Roles','slug'=>'role.index', 'status' => 1]);
        Permission::insert(['module_id' => '1', 'name' => 'Show Role','slug'=>'role.show', 'status' => 1]);
        Permission::insert(['module_id' => '1', 'name' => 'Add Role','slug'=>'role.create', 'status' => 1]);
        Permission::insert(['module_id' => '1', 'name' => 'Edit Role','slug'=>'role.edit', 'status' => 1]);
        Permission::insert(['module_id' => '1', 'name' => 'delete Role','slug'=>'role.destroy', 'status' => 1]);

        /** Patients Management */
        Permission::insert(['module_id' => '2', 'name' => 'View Patients','slug'=>'patient.index', 'status' => 1]);
        Permission::insert(['module_id' => '2', 'name' => 'Show Patient','slug'=>'patient.show', 'status' => 1]);
        Permission::insert(['module_id' => '2', 'name' => 'Create Patient','slug'=>'patient.create', 'status' => 1]);
        Permission::insert(['module_id' => '2', 'name' => 'Edit Patient','slug'=>'patient.edit', 'status' => 1]);
        Permission::insert(['module_id' => '2', 'name' => 'Delete Patient','slug'=>'patient.destroy', 'status' => 1]);


        /** Appointment Management */
        Permission::insert(['module_id' => '3', 'name' => 'View Appointment','slug'=>'appointment.index', 'status' => 1]);
        Permission::insert(['module_id' => '3', 'name' => 'Show Appointment','slug'=>'appointment.show', 'status' => 1]);
        Permission::insert(['module_id' => '3', 'name' => 'Create Appointment','slug'=>'appointment.create', 'status' => 1]);
        Permission::insert(['module_id' => '3', 'name' => 'Edit Appointment','slug'=>'appointment.edit', 'status' => 1]);
        Permission::insert(['module_id' => '3', 'name' => 'Delete Appointment','slug'=>'appointment.destroy', 'status' => 1]);



        /** Blood Management */
        Permission::insert(['module_id' => '4', 'name' => 'View Blood','slug'=>'blood.index', 'status' => 1]);
        Permission::insert(['module_id' => '4', 'name' => 'Show Blood','slug'=>'blood.show', 'status' => 1]);
        Permission::insert(['module_id' => '4', 'name' => 'Create Blood','slug'=>'blood.create', 'status' => 1]);
        Permission::insert(['module_id' => '4', 'name' => 'Edit Blood','slug'=>'blood.edit', 'status' => 1]);
        Permission::insert(['module_id' => '4', 'name' => 'Delete Blood','slug'=>'blood.destroy', 'status' => 1]);



        /** Room Management */
        Permission::insert(['module_id' => '5', 'name' => 'View Room','slug'=>'room.index', 'status' => 1]);
        Permission::insert(['module_id' => '5', 'name' => 'Show Room','slug'=>'room.show', 'status' => 1]);
        Permission::insert(['module_id' => '5', 'name' => 'Create Room','slug'=>'room.create', 'status' => 1]);
        Permission::insert(['module_id' => '5', 'name' => 'Edit Room','slug'=>'room.edit', 'status' => 1]);
        Permission::insert(['module_id' => '5', 'name' => 'Delete Room','slug'=>'room.destroy', 'status' => 1]);

        /** Emergency Management */
        Permission::insert(['module_id' => '6', 'name' => 'View Emergency','slug'=>'emergency.index', 'status' => 1]);
        Permission::insert(['module_id' => '6', 'name' => 'Show Emergency','slug'=>'emergency.show', 'status' => 1]);
        Permission::insert(['module_id' => '6', 'name' => 'Create Emergency','slug'=>'emergency.create', 'status' => 1]);
        Permission::insert(['module_id' => '6', 'name' => 'Edit Emergency','slug'=>'emergency.edit', 'status' => 1]);
        Permission::insert(['module_id' => '6', 'name' => 'Delete Emergency','slug'=>'emergency.destroy', 'status' => 1]);

        /** Reception Management */
        Permission::insert(['module_id' => '7', 'name' => 'View Reception','slug'=>'reception.index', 'status' => 1]);
        Permission::insert(['module_id' => '7', 'name' => 'Show Reception','slug'=>'reception.show', 'status' => 1]);
        Permission::insert(['module_id' => '7', 'name' => 'Create Reception','slug'=>'reception.create', 'status' => 1]);
        Permission::insert(['module_id' => '7', 'name' => 'Edit Reception','slug'=>'reception.edit', 'status' => 1]);
        Permission::insert(['module_id' => '7', 'name' => 'Delete Reception','slug'=>'reception.destroy', 'status' => 1]);

        /** Report Management */
        Permission::insert(['module_id' => '8', 'name' => 'View Report','slug'=>'report.index', 'status' => 1]);
        Permission::insert(['module_id' => '8', 'name' => 'Show Report','slug'=>'report.show', 'status' => 1]);
        Permission::insert(['module_id' => '8', 'name' => 'Create Report','slug'=>'report.create', 'status' => 1]);
        Permission::insert(['module_id' => '8', 'name' => 'Edit Report','slug'=>'report.edit', 'status' => 1]);
        Permission::insert(['module_id' => '8', 'name' => 'Delete Report','slug'=>'report.destroy', 'status' => 1]);

        /** Billing Management */
        Permission::insert(['module_id' => '9', 'name' => 'View Billing','slug'=>'billing.index', 'status' => 1]);
        Permission::insert(['module_id' => '9', 'name' => 'Show Billing','slug'=>'billing.show', 'status' => 1]);
        Permission::insert(['module_id' => '9', 'name' => 'Create Billing','slug'=>'billing.create', 'status' => 1]);
        Permission::insert(['module_id' => '9', 'name' => 'Edit Billing','slug'=>'billing.edit', 'status' => 1]);
        Permission::insert(['module_id' => '9', 'name' => 'Delete Billing','slug'=>'billing.destroy', 'status' => 1]);


        /** Laboratory Management */
        Permission::insert(['module_id' => '10', 'name' => 'View Laboratory','slug'=>'laboratory.index', 'status' => 1]);
        Permission::insert(['module_id' => '10', 'name' => 'Show Laboratory','slug'=>'laboratory.show', 'status' => 1]);
        Permission::insert(['module_id' => '10', 'name' => 'Create Laboratory','slug'=>'laboratory.create', 'status' => 1]);
        Permission::insert(['module_id' => '10', 'name' => 'Edit Laboratory','slug'=>'laboratory.edit', 'status' => 1]);
        Permission::insert(['module_id' => '10', 'name' => 'Delete Laboratory','slug'=>'laboratory.destroy', 'status' => 1]);


        /** Setting Management */
        Permission::insert(['module_id' => '11', 'name' => 'View Setting','slug'=>'setting.index', 'status' => 1]);
        Permission::insert(['module_id' => '11', 'name' => 'Show Setting','slug'=>'setting.show', 'status' => 1]);
        Permission::insert(['module_id' => '11', 'name' => 'Create Setting','slug'=>'setting.create', 'status' => 1]);
        Permission::insert(['module_id' => '11', 'name' => 'Edit Setting','slug'=>'setting.edit', 'status' => 1]);
        Permission::insert(['module_id' => '11', 'name' => 'Delete Setting','slug'=>'setting.destroy', 'status' => 1]);



        Permission::insert(['module_id' => '0', 'name' => 'List Country','slug'=>'country.index', 'status' => 1]);
        Permission::insert(['module_id' => '0', 'name' => 'Create Country','slug'=>'country.create', 'status' => 1]);
    }
}
