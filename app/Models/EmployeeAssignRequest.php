<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeAssignRequest extends Model
{
    //join with seller sell request table
    public function sellRequestInfo()
    {
        return $this->belongsTo(SellRequest::class, 'sell_request_id', 'id');
    }
    //join with employee table
    public function employeeInfo()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }
    use HasFactory;
}