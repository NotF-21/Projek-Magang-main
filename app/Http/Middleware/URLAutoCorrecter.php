<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class URLAutoCorrecter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $desiredPaths = [
            '/',
            '/hubungi-kami',
            '/tentang-kami',
            '/tim-medis',
            '/layanan/unit-gawat-darurat',
            '/layanan/rawat-inap',
            '/layanan/rawat-jalan',
            '/layanan/poligigi',
            '/layanan/vaksinasi',
            '/layanan/uji-laboratorium',
        ];

        $currentPath = $request->path();

        $bestSimilarity = 0;
        $similarPath = "";

        foreach ($desiredPaths as $desiredPath) {
            similar_text($currentPath, $desiredPath, $similarity);

            if ($similarity > $bestSimilarity) {
                $bestSimilarity = $similarity;
                $similarPath = $desiredPath;
            }
        }

        $similarityThreshold = 75;

        if ($bestSimilarity >= $similarityThreshold && $currentPath !== $similarPath) {
            return redirect($similarPath);
        } else {
            return redirect()->route('get-home');
        }

        return $next($request);
    }
}
