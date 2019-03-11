<?php

namespace Mahdcast\Http\Requests;

use Mahdcat\Series;
use Illuminate\Foundation\Http\FormRequest;

class CreateSeriesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

    public function uploadeSeriesImage()
    {
        $uploadedImage = $this->image;

        $this->fileName = str_slug($this->title) . '.' . $uploadedImage->getClienOriginalExtension();

        $uploadedImage->storePublicalyAs(
            'series', $this->fileName
        );

        return $this;
    }

    public function storeSeries()
    {

        $series = Series::create([
            'title' => $this->title,
            'description' => $this->description,
            'slug'=>str_slug($this->title),
            'image_url'=>'series/' . $this->fileName
        ]);

        return redirect()->route('series.show', $series);
    }
}
