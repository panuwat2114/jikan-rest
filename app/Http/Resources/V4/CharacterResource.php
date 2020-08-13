<?php

namespace App\Http\Resources\V4;

use Illuminate\Http\Resources\Json\JsonResource;

class CharacterResource extends JsonResource
{
    /**
     *  @OA\Schema(
     *      schema="character",
     *      description="Character Resource",
     *
     *      @OA\Property(
     *          property="mal_id",
     *          type="integer",
     *          description="MyAnimeList ID"
     *      ),
     *      @OA\Property(
     *          property="url",
     *          type="string",
     *          description="MyAnimeList URL"
     *      ),
     *      @OA\Property(
     *          property="images",
     *          type="object",
     *          description="Images",
     *          @OA\Property(
     *              property="jpg",
     *              type="object",
     *              description="Available images in JPG",
     *              @OA\Property(
     *                  property="image_url",
     *                  type="string",
     *                  description="Image URL JPG (225x335)",
     *              ),
     *              @OA\Property(
     *                  property="small_image_url",
     *                  type="string",
     *                  description="Small Image URL JPG (50x74)",
     *              ),
     *          ),
     *          @OA\Property(
     *              property="webp",
     *              type="object",
     *              description="Available images in WEBP",
     *              @OA\Property(
     *                  property="image_url",
     *                  type="string",
     *                  description="Image URL WEBP (225x335)",
     *              ),
     *              @OA\Property(
     *                  property="small_image_url",
     *                  type="string",
     *                  description="Small Image URL WEBP (50x74)",
     *              ),
     *          ),
     *      ),
     *
     *      @OA\Property(
     *          property="name",
     *          type="string",
     *          description="Name"
     *      ),
     *      @OA\Property(
     *          property="nicknames",
     *          type="array",
     *          description="Other Names",
     *          @OA\Items(
     *              type="string"
     *          )
     *      ),
     *      @OA\Property(
     *          property="favorites",
     *          type="integer",
     *          description="Number of users who have favorited this entry"
     *      ),
     *      @OA\Property(
     *          property="about",
     *          type="string",
     *          description="Synopsis"
     *      ),
     *      @OA\Property(
     *          property="animeography",
     *          type="array",
     *          @OA\Items(
     *              type="object",
     *              allOf={
     *                  @OA\Schema(ref="#/components/schemas/mal_url"),
     *                  @OA\Schema(
     *                      @OA\Property(
     *                          property="image_url",
     *                          type="string",
     *                      ),
     *                      @OA\Property(
     *                          property="role",
     *                          type="string",
     *                      ),
     *                  ),
     *              },
     *          ),
     *      ),
     *      @OA\Property(
     *          property="mangaography",
     *          type="array",
     *          @OA\Items(
     *              type="object",
     *              allOf={
     *                  @OA\Schema(ref="#/components/schemas/mal_url"),
     *                  @OA\Schema(
     *                      @OA\Property(
     *                          property="image_url",
     *                          type="string",
     *                      ),
     *                      @OA\Property(
     *                          property="role",
     *                          type="string",
     *                      ),
     *                  ),
     *              },
     *          ),
     *      ),
     *      @OA\Property(
     *          property="voice_actors",
     *          type="array",
     *          @OA\Items(
     *              type="object",
     *              allOf={
     *                  @OA\Schema(ref="#/components/schemas/mal_url"),
     *                  @OA\Schema(
     *                      @OA\Property(
     *                          property="image_url",
     *                          type="string",
     *                      ),
     *                      @OA\Property(
     *                          property="language",
     *                          type="string",
     *                      ),
     *                  ),
     *              },
     *          ),
     *      ),
     *  )
     */

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'mal_id' => $this->mal_id,
            'url' => $this->url,
            'images' => $this->image,
            'name' => $this->name,
            'nicknames' => $this->nicknames,
            'favorites' => $this->favorites,
            'about' => $this->about,
            'animeography' => $this->animeography,
            'mangaography' => $this->mangaography,
            'voice_actors' => $this->voice_actors,
        ];
    }
}