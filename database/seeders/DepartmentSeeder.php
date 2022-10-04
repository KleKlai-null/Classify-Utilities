<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
          [
            'name'  => 'Office of the College Dean'
          ],  
          [
            'name'  => 'Department of Student Affairs and Services'
          ], 
          [
            'name'  => 'Human Resource Management Office'
          ], 
          [
            'name'  => 'Basic Education Department'
          ],
          [
            'name'  => 'Quality Assurance Division'
          ],
          [
            'name'  => 'Guidance and Testing Center'
          ],
          [
            'name'  => 'Finance'
          ],
          [
            'name'  => 'Registrar'
          ],
          [
            'name'  => 'College of Business'
          ],
          [
            'name'  => 'College of Computer Studies'
          ],
          [
            'name'  => 'Compliance Office'
          ],
          [
            'name'  => 'Supply Office'
          ],
          [
            'name'  => 'Pharmacy Department'
          ],
          [
            'name'  => 'College of Education'
          ],
          [
            'name'  => 'Administrative Office'
          ],
          [
            'name'  => 'Department of Criminology'
          ],
          [
            'name'  => 'Reserve Officers Training Corps'
          ],
          [
            'name'  => 'Supreme Student Council'
          ],
          [
            'name'  => 'Academic Department'
          ],
          [
            'name'  => 'Office of the External Affairs'
          ],
          [
            'name'  => 'Office of the Executive Vice President'
          ],
          [
            'name'  => 'Office of the School Registrar'
          ],
          [
            'name'  => 'Office of the School President'
          ],
          [
            'name'  => 'Library'
          ],
          [
            'name'  => 'Property Custodian'
          ],
          [
            'name'  => 'Office of the Property Custodian'
          ],
          [
            'name'  => 'Marketing and Information Office'
          ],
          [
            'name'  => 'Office of the Academic Director'
          ],
          [
            'name'  => 'Office of the Scholarship Coordinator'
          ],
          [
            'name'  => 'Office of the Prefect Discipline'
          ],
          [
            'name'  => 'Office of the TESDA Coordinator'
          ],
          [
            'name'  => 'Office of the Prefect of Discipline'
          ],
          [
            'name'  => 'Accountancy Department'
          ],
          [
            'name'  => 'Office of the External Affairs and Linkages'
          ],
          [
            'name'  => 'Safety and Security'
          ],
          [
            'name'  => 'Research and Development Office'
          ],
          [
            'name'  => 'Customer Relation Office'
          ],
          [
            'name'  => 'Business Department'
          ],
          [
            'name'  => 'Education Department'
          ],
          [
            'name'  => 'Computer Studies Department'
          ],
          [
            'name'  => 'Information Office'
          ],
          [
            'name'  => 'Customer Relations Office'
          ],
          [
            'name'  => 'Criminology Department'
          ],
          [
            'name'  => 'College Department'
          ]
        ];

        Department::insert($departments);
    }
}
