<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class Postback extends Model
{
    protected $table = 'postbacks'; // Update the table name if needed

    protected $fillable = [
        'url',
        'request',
        'response',
    ];

    public static function getPostbackUrl($affId)
    {
        return Affiliate::where('affiliate_id', $affId)->first();

    }

    public function savePostback(string $url, string $response): bool
    {
        try {
            $postback = new Postback();

            // Set the postback data
            $postback->url = $url;
            $postback->request = json_encode(['method' => $url]);
            $postback->response = json_encode(['body' => $response]);

            // Save the postback to the database
            $postback->save();

            return true;
        } catch (QueryException $e) {
            // Handle the database save error
            Log::error('Failed to save postback to the database: ' . $e->getMessage());
        }
    }

}
