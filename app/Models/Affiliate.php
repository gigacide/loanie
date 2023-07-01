<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    protected $fillable = ['name', 'email', 'website', 'cpl', 'revshare',];

    public function loanApplications()
    {
        return $this->hasMany(LoanApplication::class);
    }

    public function commissionLogs()
    {
        return $this->hasMany(CommissionLog::class);
    }
    public function updateCPLAmount($amount)
    {
        $this->CPL += $amount;
        $this->save();
    }

    public function getTotalCommissions()
    {
        return $this->commissions()->sum('amount');
    }


}



