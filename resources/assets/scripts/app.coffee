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
        $("#favorite-button-"+topic_id).replaceWith('<i class="fa fa-heart icon-padding-right text-danger"></i>')
        $("#favorites-num-"+topic_id).text(
          parseInt($("#favorites-num-"+topic_id).text(), 10) + 1
        )
  })
)

$("a.js-vote-button")
.click((event) ->
  event.preventDefault()
  comment_id = $(this).data("comment-id")
  token = $(this).data("token")

  $.ajax({
    type: "POST",
    url: '/vote',
    data: {
      _token: token
      comment_id: comment_id,
    },
    success: ( data ) ->
      if data["status"] == "success"
        $("#vote-button-"+comment_id).replaceWith('<i class="fa fa-thumbs-o-up icon-padding-right text-danger"></i>')
        $("#votes-num-"+comment_id).text(
          parseInt($("#votes-num-"+comment_id).text(), 10) + 1
        )
  })
)