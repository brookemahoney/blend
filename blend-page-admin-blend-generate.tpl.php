import bpy

add_cube = bpy.ops.mesh.primitive_cube_add
<?php foreach($node_types as $node_type): ?>
add_cube(location=(<?php print $node_type->location; ?>))
bpy.context.active_object.name = 'node:<?php print $node_type->type; ?>'
bpy.context.active_object.data.name = 'node:<?php print $node_type->type; ?>'
bpy.context.active_object.show_name = True
<?php endforeach; ?>
