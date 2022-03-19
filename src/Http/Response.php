<?php
namespace Framework\Http;


class Response
{

      /**
       * @var string
      */
      protected $content;


      /**
       * @var int|mixed
      */
      protected $statusCode;




      /**
       * @var array
      */
      protected $headers;




      /**
       * @param $content
       * @param $statusCode
       * @param array $headers
      */
      public function __construct($content = null, $statusCode = 200, array $headers = [])
      {
           $this->content = $content;
           $this->statusCode = $statusCode;
           $this->headers = $headers;
      }




      /**
       * @param $content
       * @return $this
      */
      public function withBody($content): self
      {
          $this->content = $content;

          return $this;
      }



      /**
       * @param $statusCode
       * @return $this
      */
      public function withStatusCode($statusCode): self
      {
          $this->statusCode = $statusCode;

          return $this;
      }




      /**
       * @param $headers
       * @return $this
      */
      public function withHeaders($headers): self
      {
          $this->headers[] = $headers;

          return $this;
      }


      /**
       * @param $name
       * @param $value
       * @return $this
      */
      public function withHeader($name, $value): self
      {
          $this->headers[$name] = $value;

          return $this;
      }




      /**
       * @return Response|void
       */
      public function send()
      {
          if (headers_sent()) {
              return $this;
          }

          http_response_code($this->statusCode);

          foreach ($this->headers as $key => $value) {
              header($key . ': '. $value);
          }
      }




      /**
       * @return string
      */
      public function __toString()
      {
          return (string) $this->content;
      }
}