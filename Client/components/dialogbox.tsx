import { Button } from "@/components/ui/button"
import {
  Dialog,
  DialogContent,
  DialogDescription,
  DialogFooter,
  DialogHeader,
  DialogTitle,
  DialogTrigger,
} from "@/components/ui/dialog"
import { Input } from "@/components/ui/input"
import { Label } from "@/components/ui/label"
import { Textarea } from "@/components/ui/textarea"

export function DialogDemo() {
  return (
    <Dialog>
      <DialogTrigger asChild>
        <Button>Add Medical History</Button>
      </DialogTrigger>
      <DialogContent className="sm:max-w-[425px]">
        <DialogHeader>
          <DialogTitle>Edit profile</DialogTitle>
          <DialogDescription>
            Make changes to your profile here. Click save when you're done.
          </DialogDescription>
        </DialogHeader>
        <div className="grid gap-4 py-4">
          <div className="grid grid-cols-4 items-center gap-4">
            <Label htmlFor="name" className="text-right">
              Name
            </Label>
            <Input
              id="name"
              defaultValue="Pedro Duarte"
              className="col-span-3"
            />
          </div>
          <div className="grid grid-cols-4 items-center gap-4">
            <Label htmlFor="username" className="text-right">
              Age
            </Label>
            <Input id="username" defaultValue="18" className="col-span-3" />
          </div>
          <div className="grid grid-cols-4 items-center gap-4">
            <Label htmlFor="name" className="text-right">
              Pressure
            </Label>
            <Input id="name" defaultValue="120/80" className="col-span-3" />
          </div>
          <div className="grid grid-cols-4 items-center gap-4">
            <Label htmlFor="username" className="text-right">
              Blood group
            </Label>
            <Input id="username" defaultValue="B+" className="col-span-3" />
            
          </div>
          <div className="grid grid-cols-4 items-center gap-4">
            
          
            <Label htmlFor="username" className="text-right">
              
              Symtom description
            </Label>
            <Textarea className="col-span-3" placeholder="Type your message here." />
          </div>

          <div className="grid grid-cols-4 items-center gap-4">
            <Label htmlFor="username" className="text-right">
              Previous Medication
            </Label>
            <Textarea className="col-span-3" placeholder="Type your message here." />
          </div>

          <div className="grid grid-cols-4 items-center gap-4">
            <Label htmlFor="username" className="text-right">
              Previous Medical HIstory
            </Label>
            <Textarea className="col-span-3" placeholder="Type your message here." />
          </div>

          <div className="grid grid-cols-4 items-center gap-4">
            <Label htmlFor="username" className="text-right">
              Completed Test Report
            </Label>
            <Textarea className="col-span-3" placeholder="Type your message here." />
          </div>
        </div>
        <DialogFooter>
          <Button type="submit">Add history</Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
  )
}
