$("a.js-favorite-button")
.click((event) ->
  event.preventDefault()
  topic_id = $(this).data("topic-id")
  token = $(this).data("token")

  $.ajax({
    type: "POST",
    url: '/favorite',
    data: {
      _token: token
      topic_id: topic_id,
    },
    success: ( data ) ->
      if data["status"] == "success"
        $("#favorite-button-"+topic_id).html('<i class="fa fa-heart icon-padding-right text-danger"></i>')
        $("#favorites-num-"+topic_id).text(
          parseInt($("#favorites-num-"+topic_id).text(), 10) + 1
        )
  })
)