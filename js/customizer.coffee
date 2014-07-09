do($=jQuery)->
  wp.customize 'sidebar_featured_enabled',(val)->
    val.bind (newval)->
      return $('.nav-hot').show() if newval is yes
      $('.nav-hot').hide()

  wp.customize 'sidebar_featured_text',(val)->
    val.bind (newval)->
      $('.nav-hot').html(newval)
