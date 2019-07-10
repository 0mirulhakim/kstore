<?php

use Faker\Factory;
use App\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends DatabaseSeeder {

	public function run()
	{
		DB::table('users')->truncate(); // Using truncate function so all info will be cleared when re-seeding.
		DB::table('roles')->truncate();
		DB::table('role_users')->truncate();
		DB::table('activations')->truncate();
		

        // create 2 users
		$superadmin = Sentinel::registerAndActivate(array(
			'email'       => 'superadmin@superadmin.com',
			'password'    => "superadmin",
			'first_name'  => 'Saya',
			'last_name'   => 'SuperAdmin',
		));
		$admin = Sentinel::registerAndActivate(array(
			'email'       => 'admin@admin.com',
			'password'    => "admin",
			'first_name'  => 'Saya',
			'last_name'   => 'Admin',
		));
		$penyelia = Sentinel::registerAndActivate(array(
			'email'       => 'penyelia@penyelia.com',
			'password'    => "penyelia",
			'first_name'  => 'Saya',
			'last_name'   => 'Penyelia',
		));
        $kerani = Sentinel::registerAndActivate(array(
            'email'       => 'kerani@kerani.com',
            'password'    => "kerani",
            'first_name'  => 'Saya',
            'last_name'   => 'Kerani',
        ));

        // create 2 roles
        $superadminRole = Sentinel::getRoleRepository()->createModel()->create([
			'name' => 'SuperAdmin',
			'slug' => 'superadmin',
			'permissions' => array('superadmin' => 1)
		]);
        $adminRole = Sentinel::getRoleRepository()->createModel()->create([
			'name' => 'Admin',
			'slug' => 'admin',
			'permissions' => array('admin' => 1)
		]);
        $penyeliaRole = Sentinel::getRoleRepository()->createModel()->create([
			'name' => 'Penyelia',
			'slug' => 'penyelia',
			'permissions' => array('penyelia' => 1)
		]);

        $keraniRole = Sentinel::getRoleRepository()->createModel()->create([
			'name'  => 'Kerani',
			'slug'  => 'kerani',
            'permissions' => array('kerani' => true)
		]);

        // add user to user role and admin to admin role
        $kerani->roles()->attach($keraniRole);
		$admin->roles()->attach($adminRole);
		$superadmin->roles()->attach($superadminRole);
		$penyelia->roles()->attach($penyeliaRole);

		$this->command->info('Admin User created with username admin@admin.com and password admin');
        $this->command->info('SuperAdmin User created with username superadmin@superadmin.com and password superadmin');
        $this->command->info('Penyelia User created with username penyelia@penyelia.com and password penyelia');
        $this->command->info('Kerani User created with username kerani@kerani.com and password kerani');
	}

}